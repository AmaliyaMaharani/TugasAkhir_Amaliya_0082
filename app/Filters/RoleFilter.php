<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Ambil session
        $session = session();

        // Cek apakah pengguna sudah login
        if (!$session->has('isLoggedIn') || !$session->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Cek role pengguna
        $userRole = $session->get('role'); // Sesuaikan dengan nama key session Anda

        if (!in_array($userRole, $arguments)) {
            return redirect()->to('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada aksi setelah
    }
}
