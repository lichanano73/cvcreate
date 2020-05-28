<?php
namespace App\Models;

interface Printable {
    public function getTitle();
    public function getDescription();
}