<?php
class Controller_Base_Rest extends Controller_Rest
{
  // レスポンスをjsonに固定する
  //  protected $format = 'json';


  // 正常時のレスポンスを返却する
  protected function success($result = null)
  {
    return $this->response($result,200);
  }


}
