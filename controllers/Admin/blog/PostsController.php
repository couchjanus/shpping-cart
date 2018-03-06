<?php

class PostsController extends Controller {
  
    private $resource = 'posts';
    private $metas = [];

    public function index()
    {
      $posts = Post::index();
      $data['title'] = 'Admin Posts Page ';
      $data['posts'] = $posts;
      $this->_view->render('admin/posts/index',$data);
    }


    public function create () {
      //Принимаем данные из формы
      if (isset($_POST) and !empty($_POST)) {
          $options['title'] = trim(strip_tags($_POST['title']));
          $options['content'] = trim($_POST['content']);
          $options['status'] = trim(strip_tags($_POST['status']));

          Post::store($options);
          $post_id = (int)Post::lastId();

          $this->metas['resource_id'] = $post_id;
          $this->metas['resource'] = $this->resource;
          $this->metas['title'] = trim(strip_tags($_POST['meta_title']));
          
          $this->metas['description'] = trim(strip_tags($_POST['meta_description']));
          
          $this->metas['keywords'] = trim(strip_tags($_POST['meta_keywords']));
          
          $this->metas['links'] = trim(strip_tags($_POST['meta_links']));

          Meta::store($this->metas);

          $this->redirect('/admin/posts');
        
      }
      $data['title'] = 'Admin Add Post ';

      $this->_view->render('admin/posts/create',$data);

  }

    public function edit($vars)
    {
    
        extract($vars);
    
        if (isset($_POST) and !empty($_POST)) {
        $options['title'] = trim(strip_tags($_POST['title']));
        $options['content'] = trim($_POST['content']);
        $options['status'] = trim(strip_tags($_POST['status']));
        
        Post::update($id, $options);

        $this->metas['resource_id'] = $id;
        $this->metas['resource'] = $this->resource;
        $this->metas['title'] = trim(strip_tags($_POST['meta_title']));
        $this->metas['description'] = trim(strip_tags($_POST['meta_description']));
        $this->metas['keywords'] = trim(strip_tags($_POST['meta_keywords']));
        $this->metas['links'] = trim(strip_tags($_POST['meta_links']));

        Meta::store($this->metas);

        $this->redirect('/admin/posts');
      
        }
        
        $data['title'] = 'Admin Edit Post ';
        $data['metas']  = Meta::getMetas($this->resource, $id);
        $data['post'] = Post::getPostById($id);
        $this->_view->render('admin/posts/edit', $data);

    }

    public function delete($vars) 
    {
        extract($vars);
    
        if (isset($_POST['submit'])) {
            Post::destroy($this->resource, $id);
            $this->redirect('/admin/posts');
            
        }
        elseif (isset($_POST['reset'])) {
            $this->redirect('/admin/posts');            
        }

        $data['title'] = 'Admin Delete Post ';
        $data['post'] = Post::getPostById($id);
        $this->_view->render('admin/posts/delete', $data);
    
    }
}