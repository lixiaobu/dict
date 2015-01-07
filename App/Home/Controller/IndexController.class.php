<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
      $this->display();
    }

    public function seek() {
      $keyword = htmlspecialchars(trim($_GET['keyword']));
      if(empty($keyword)) $this->display('error');
      $w = M('word');
      $where = "word = '" . $keyword . "'";
      $result = $w->where($where)->select();

      $this->assign('keyword', $keyword);
      if(!empty($result)) {
        $this->assign('result', $result);
        $this->display('seek_result');
      }
    }

    public function suggestion($kw) {
      $kw = trim($kw);

      $in = M('word_index');
      $result = $in->table('word_index ind,word wo')->where('letter=\'' . $kw . '\' and ind.id=wo.id')->field('wo.word,wo.sound,wo.chinese,wo.lenth')->order('lenth ASC')->limit('0'.','.'20')->select();
      return $result;
    }

    public function checkword() {
      $result = $this->suggestion($_POST['keyword']);
      if(!empty($result)){
        foreach($result as $v)
        {
          $r .= $v['word'] . ' ' . $v['sound'] . ' ' . $v['chinese'] . '<br />';
        }
      }
      $ajData['data'] = $r;
      $ajData['info'] = '词提示：';
      $ajData['status'] = 1;
      $this->ajaxReturn($ajData);
    }
}
