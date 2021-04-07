<?php

namespace App\Http\Livewire;

use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Product extends Component
{

    public $state;
    public $product_id;

    public function mount($state,$id)
    {
        $this->state = $state;
        $this->product_id = $id;
        $this->check_db_state();
    }

     public function updatedState()
     {
          if ($this->state != 1) {
              $this->state = 0;
              $this->state_change_db($this->state);
          }
          else{
            $this->state = 1;
            $this->state_change_db($this->state);
          }
     }

     private function check_db_state()
     {
        $check = DB::table('products')->where('id',$this->product_id)->get();
        $this->state = $check[0]->state;

     }

     private function state_change_db($data)
     {
         DB::table('products')->where('id',$this->product_id)->update(['state'=>$data]);
     }
    public function render()
    {
        return view('livewire.product');
    }
}
