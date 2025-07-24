<?php
namespace lucasan\gs\Core;

interface Crud{
    public function create();
    public function read();
    public function update($id);
    public function delete($id);

}