<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
  //define property
  public $status;
  public $message;

  public function __construct($status, $message, $resource)
  {
    parent::__construct($resource);
    $this->status = $status;
    $this->message = $mesage;
  }

  public function toArray($request)
  {
    return [
        'success' => $this->status,
        'message' => $this->message,
        'data' => $this->resource
    ];
  }
}
