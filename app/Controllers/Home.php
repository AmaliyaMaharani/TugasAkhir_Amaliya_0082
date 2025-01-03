<?php

namespace App\Controllers;

use App\Models\Model_users;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'content' => 'admin/v_dashboard'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function login()
    {
        return view('login');
    }

    public function autentikasi()
    {
        $session = session();
        $modelUsers = new Model_users();

        // Ambil input dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi input kosong
        if (empty($username) || empty($password)) {
            return redirect()->to('/')->with('error', 'Username dan password harus diisi.');
        }

        // Cari user berdasarkan username
        $user = $modelUsers->getUserByUsername($username);

        if ($user) {

            // Periksa password
            if (password_verify($password, $user['password'])) {
                // Set session
                $sessionData = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'isLoggedIn' => true,
                ];
                $session->set($sessionData);

                // Redirect berdasarkan role
                if ($user['role'] === 'admin') {
                    return redirect()->to('/Admin/dashboard')->with('success', 'Selamat datang, Admin!');
                } elseif ($user['role'] === 'pemilik') {
                    return redirect()->to('/Pemilik/dashboard')->with('success', 'Selamat datang, Pemilik!');
                } else {
                    return redirect()->to('/')->with('error', 'Role tidak dikenal.');
                }
            } else {
                // Password salah
                return redirect()->to('/')->with('error', 'Password salah.');
            }
        } else {
            // Username tidak ditemukan
            return redirect()->to('/')->with('error', 'Username tidak ditemukan.');
        }
    }

    public function logout()
    {
        $session = session(); // Memulai session
        $session->destroy(); // Menghapus semua data session

        return redirect()->to('/')->with('success', 'Anda telah berhasil logout.');
    }
}
