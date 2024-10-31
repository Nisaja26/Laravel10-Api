<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

// class PostResource merupakan turunan dari JsonResource
class PostResource extends JsonResource
{

    // 3 publik
    //define properti
    // status dan message di tampilkan 
    public $status;
    public $message;
    // untuk simpan data
    public $resource;
    
    /**
     * __construct
     *
     * @param  mixed $status
     * @param  mixed $message
     * @param  mixed $resource
     * @return void
     */

    //  memberikan 3 paramenter
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    //  diimplementasikan dari class JsonResource
    public function toArray($request)
    {
        return [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      => $this->resource
        ];
    }
}