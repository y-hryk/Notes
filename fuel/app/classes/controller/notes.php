<?php
class Controller_Notes extends Controller_Rest
{
  // protected $format = 'json';
    // メモ一覧を取得する
    public function get_index()
    {
        $list = array(
            'foo' => Input::get('foo'),
            'param'=>Input::get('param'),
            'baz' => array(
                1, 50, 219
            ),
            'empty' => null
        );

      //  $query = DB::select()->from('notes');
      //  $viewdata = $query->execute();
      //  var_dump($viewdata);
      // $query = DB::select()->from('notes')->execute();
      // var_dump($query);
        // $this->responseに配列として設定する
        return $this->response($list,200);
    }
    // メモを投稿する
    public function post_index()
    {
        $list = array(
            'foo' => Input::post('foo'),
            'baz' => array(
                1, 50, 219
            ),
            'empty' => null
        );

        // $this->responseに配列として設定する
        return $this->response($list,200);
    }
}
