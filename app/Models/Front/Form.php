<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Const
     */
    const STATUS_WAITING_TO_READ = 'waiting to read';
    const STATUS_AWAITING_APPROVAL = 'awaiting approval';
    const STATUS_PROCESSED = 'processed';
    const STATUS_TRASH = 'trash';
    const STATUS_SPAM = 'spam';

    const FORM_SUBMIT_INTERVAL = 30;
    const FORM_SUBMIT_SUCCESS = 'We appreciate that you’ve taken the time to write us. We’ll get back to you very soon.';
    const FORM_SUBMIT_SPAM = 'Sorry! You must wait :minutes minutes to resubmit the form';

    /**
     * @var string[]
     */
    protected $_status = [
        Form::STATUS_WAITING_TO_READ => [
            'fa' => '<i class="fas fa-circle text-orange-500 mr-2"></i>' . Form::STATUS_WAITING_TO_READ
        ],
        Form::STATUS_AWAITING_APPROVAL => [
            'fa' => '<i class="fas fa-circle text-blue-500 mr-2"></i>' . Form::STATUS_AWAITING_APPROVAL
        ],
        Form::STATUS_PROCESSED => [
            'fa' => '<i class="fas fa-circle text-green-500 mr-2"></i>' . Form::STATUS_PROCESSED
        ],
        Form::STATUS_TRASH => [
            'fa' => '<i class="fas fa-circle text-red-500 mr-2"></i>' . Form::STATUS_TRASH
        ],
        Form::STATUS_SPAM => [
            'fa' => '<i class="fas fa-circle text-black mr-2"></i>' . Form::STATUS_SPAM
        ],
    ];

    protected $_categories = [
        'contact',
        'airdrop'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'front_form';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status',
        'category',
        'ip',
    ];

    /**
     * @return \Illuminate\Support\Collection|string[]|\string[][]
     */
    public function getStatus(){
        if($this->getAttributes()){
            return $this->_status[$this->status];
        }
        return $this->_status;
    }

    /**
     * @return string[]
     */
    public function getCategories(){
        return $this->_categories;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getFilterStatus(){
        $keys = collect($this->_status)->keys();
        return collect($keys)->combine($keys->map(function($key){
            return ucfirst($key);
        }));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getFilterCategories(){
        $keys = collect($this->_categories);
        return collect($keys)->combine($keys->map(function($key){
            return ucfirst($key);
        }));
    }
}
