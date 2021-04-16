<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\buku as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table="bukus"; // Eloquent akan membuat model buku, menyimpan record di tabel buku
 public $timestamps= false;
 protected $primaryKey = 'id_buku'; // Memanggil isi DB Dengan primarykey
 /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 protected $fillable = [
 'id_buku',
 'judul',
 'kategori',
 'penerbit',
 'pengarang',
 'jumlah',
 'status',
 ];

}
