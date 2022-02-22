<?php

namespace App\classes;


class ProductUpload
{
    protected $name;
    protected $description;
    protected $price;
    protected $value;
    protected $result;
    protected $data;
    protected $file;
    protected $array;
    protected $array1;
    protected $array2;
    protected $imageFile;
    protected $imagePath;
    protected $filePath;
    protected $imageName;
    protected $imageDirectory;


    public function __construct($file = null, $post = null)
    {
        if ($post)
        {
            $this->name = $post['name'];
            $this->description = $post['description'];
            $this->price = $post['price'];
            $this->value = $post;
        }
        if ($file)
        {
            $this->imageFile = $file['image'];
        }
    }

    public function index()
    {
        $this->imagePath = $this->imageUpload();
        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->data =  "$this->name,$this->description,$this->price,$this->imagePath$";
        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'Product Upload Successfully.';
    }

    protected function imageUpload()
    {
        $this->imageName = time().$this->imageFile['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->imageFile['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }

    public function getAllProductInfo()
    {
        $this->filePath = 'db/db.txt';
        $this->data = file_get_contents($this->filePath);
        $this->array = explode('$', $this->data);
        foreach ($this->array as $key => $value)
        {
            $this->array2 = explode(',', $value);
            if ($this->array2[0])
            {
                $this->array1[$key]['name'] = $this->array2[0];
                $this->array1[$key]['description'] = $this->array2[1];
                $this->array1[$key]['price'] = $this->array2[2];
                $this->array1[$key]['image'] = $this->array2[3];
            }
        }
        return $this->array1;
    }

}