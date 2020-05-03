<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthRoleDesarrolladorFilter implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session = session();

        if ($session->type != "desarrollador") {
            return redirect('login');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}