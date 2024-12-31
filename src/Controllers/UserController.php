<?php
namespace App\Controllers;

use App\Models\User;



class UserController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel->all();
        $this->render('users/index', ['users' => $users]);
    }

    public function create()
    {
        $this->render('users/create');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => htmlspecialchars($_POST['name']),
                'email' => htmlspecialchars($_POST['email'])
            ];

            if ($this->userModel->create($data)) {
                header('Location: index.php');
                exit;
            }


        }
    }

    public function edit()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $user = $this->userModel->find($id);
            $this->render('users/edit', ['user' => $user]);
        }
    }
    public function show()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $user = $this->userModel->find($id);
            $this->render('users/show', ['user' => $user]);
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email']
            ];

            if ($this->userModel->update($id, $data)) {
                header('Location: index.php');
                exit;
            }
        }
    }

    public function delete()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            if ($this->userModel->delete($id)) {
                header('Location: index.php');
                exit;
            }
        }
    }


}