<?php

namespace App\Controllers\TestAdmin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BookModel;


class TestBookController extends BaseController
{
public function index()
    {
        $books = (new BookModel())->orderBy('id','DESC')->findAll();
        return view('admin/books', ['books'=>$books]);
    }

    public function create()
    {
        $model = new BookModel();
        if ($this->request->getMethod()==='post') {
            $model->insert([
                'title'=>$this->request->getPost('title'),
                'slug'=>$this->request->getPost('slug'),
                'base_price'=>$this->request->getPost('base_price'),
            ]);
            return redirect()->to('/admin/books');
        }
        return view('admin/book_form');
    }

    public function edit($id)
    {
        $model = new BookModel();
        $book = $model->find($id);
        if ($this->request->getMethod()==='post') {
            $model->update($id, [
                'title'=>$this->request->getPost('title'),
                'slug'=>$this->request->getPost('slug'),
                'base_price'=>$this->request->getPost('base_price'),
            ]);
            return redirect()->to('/admin/books');
        }
        return view('admin/book_form',['book'=>$book]);
    }
}
