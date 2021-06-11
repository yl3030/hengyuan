<?php  
//header("Content-Type:text/html; charset=utf-8");
class SubPages{  
    
  private $each_disNums;//每頁顯示的條目數  
  
  private $nums;//總條目數  
  
  private $current_page;//當前被選中的頁  
  
  private $sub_pages;//每次顯示的頁數  
  
  private $pageNums;//總頁數  
  
  private $page_array = array();//用來構造分頁的數組  
  
  private $subPage_link;//每個分頁的鏈接  
  
  private $subPage_type;//顯示分頁的類型  
  
  /* 
  __construct是SubPages的構造函數，用來在創建類的時候自動運行. 
  @$each_disNums 每頁顯示的條目數 
  @nums 總條目數 
  @current_num 當前被選中的頁 
  @sub_pages 每次顯示的頁數 
  @subPage_link 每個分頁的鏈接 
  @subPage_type 顯示分頁的類型 
   
  當@subPage_type=1的時候為普通分頁模式 
        example： 共4523條記錄,每頁顯示10條,當前第1/453頁 [首頁] [上頁] [下頁] [尾頁] 
        當@subPage_type=2的時候為經典分頁樣式 
        example： 當前第1/453頁 [首頁] [上頁] 1 2 3 4 5 6 7 8 9 10 [下頁] [尾頁] 
  */  
  function __construct($each_disNums,$nums,$current_page,$sub_pages,$subPage_link,$subPage_type){  
   $this->each_disNums=intval($each_disNums);  
   $this->nums=intval($nums);  
   if(!$current_page){  
    $this->current_page=1;  
   }else{  
    $this->current_page=intval($current_page);  
   }  
   $this->sub_pages=intval($sub_pages);  
   $this->pageNums=ceil($nums/$each_disNums);  
   $this->subPage_link=$subPage_link;   
   $this->show_SubPages($subPage_type);   
   //echo $this->pageNums."--".$this->sub_pages;  
  
  }  
    
    
  /* 
   __destruct析構函數，當類不在使用的時候調用，該函數用來釋放資源。 
  */  
  function __destruct(){  
   unset($each_disNums);  
   unset($nums);  
   unset($current_page);  
   unset($sub_pages);  
   unset($pageNums);  
   unset($page_array);  
   unset($subPage_link);  
   unset($subPage_type);  
  }  
    
  /* 
   show_SubPages函數用在構造函數里面。而且用來判斷顯示什麼樣子的分頁  
  */  
  function show_SubPages($subPage_type){  
   if($subPage_type == 1){  
    $this->subPageCss1();  
   }elseif ($subPage_type == 2){  
    $this->subPageCss2();  
   }  
  }  
    
    
  /* 
   用來給建立分頁的數組初始化的函數。 
  */  
  function initArray(){  
   for($i=0;$i<$this->sub_pages;$i++){  
    $this->page_array[$i]=$i;  
   }  
   return $this->page_array;  
  }  
    
    
  /* 
   construct_num_Page該函數使用來構造顯示的條目 
   即使：[1][2][3][4][5][6][7][8][9][10] 
  */  
  function construct_num_Page(){  
   if($this->pageNums < $this->sub_pages){  
    $current_array=array();  
    for($i=0;$i<$this->pageNums;$i++){   
     $current_array[$i]=$i+1;  
    }  
   }else{  
    $current_array=$this->initArray();  
    if($this->current_page <= 3){  
     for($i=0;$i<count($current_array);$i++){  
      $current_array[$i]=$i+1;  
     }  
    }elseif ($this->current_page <= $this->pageNums && $this->current_page > $this->pageNums - $this->sub_pages + 1 ){  
     for($i=0;$i<count($current_array);$i++){  
      $current_array[$i]=($this->pageNums)-($this->sub_pages)+1+$i;  
     }  
    }else{  
     for($i=0;$i<count($current_array);$i++){  
      $current_array[$i]=$this->current_page-2+$i;  
     }  
    }  
   }  
     
   return $current_array;  
  }  
    
  /* 
  構造普通模式的分頁 
  共4523條記錄,每頁顯示10條,當前第1/453頁 [首頁] [上頁] [下頁] [尾頁] 
  */  
  function subPageCss1(){  
   //$subPageCss1Str="";  
   //$subPageCss1Str.="共".$this->nums."條記錄，";  
   //$subPageCss1Str.="每頁顯示".$this->each_disNums."條，";  
   //$subPageCss1Str.="當前第".$this->current_page."/".$this->pageNums."頁 ";  
   if($this->current_page > 1){  
    $firstPageUrl=$this->subPage_link."1";  
    $prewPageUrl=$this->subPage_link.($this->current_page-1);  
    //$subPageCss1Str.="[<a href='$firstPageUrl'>首頁</a>] ";  
    $subPageCss1Str.="<a href='$prewPageUrl'>上一則</a> ";  
   }else {  
    //$subPageCss1Str.="首頁 ";  
    $subPageCss1Str.="上一則 ";  
   }  
   echo "<a class=\"page_bg\" href=\"news.php\">回列表頁</a>";
   if($this->current_page < $this->pageNums){  
    $lastPageUrl=$this->subPage_link.$this->pageNums;  
    $nextPageUrl=$this->subPage_link.($this->current_page+1);  
    $subPageCss1Str.=" <a href='$nextPageUrl'>下一則</a> ";  
    //$subPageCss1Str.="[<a href='$lastPageUrl'>尾頁</a>] ";  
   }else {  
    $subPageCss1Str.="下一則 ";  
   // $subPageCss1Str.="[尾頁] ";  
   }  
     
   echo $subPageCss1Str;  
     
  }  
    
    
  /* 
  構造經典模式的分頁 
  當前第1/453頁 [首頁] [上頁] 1 2 3 4 5 6 7 8 9 10 [下頁] [尾頁] 
  */  
  function subPageCss2(){
   $subPageCss2Str.="<div class=\"page\">";
   
   if($this->current_page > 1){  
    $firstPageUrl=$this->subPage_link."1";  
    $prewPageUrl=$this->subPage_link.($this->current_page-1);  
    //$subPageCss2Str.="<a href='$firstPageUrl' class=\"prev\">第一頁</a>";   
   }/*else {  
    $subPageCss2Str.="<a href=\"javascript:void(0)\">第一頁</a>";   
   }  */
     
   $a=$this->construct_num_Page();  
   for($i=0;$i<count($a);$i++){  
    $s=$a[$i];  
    if($s == $this->current_page ){  
     $subPageCss2Str.="<a href=\"javascript:void(0)\" class=\"page_bg\">".$s."</a>";  
    }else{  
     $url=$this->subPage_link.$s;  
     $subPageCss2Str.="<a href='$url'>".$s."</a>";  
    }  
   }  
     
   if($this->current_page < $this->pageNums){  
    $lastPageUrl=$this->subPage_link.$this->pageNums;  
    $nextPageUrl=$this->subPage_link.($this->current_page+1);  
    /*$subPageCss2Str.="<a href='$lastPageUrl' class=\"next\">最後一頁</a>";  */
   }/*else {  
    $subPageCss2Str.="<a href=\"javascript:void(0)\">最後一頁</a>";
   }*/
   
   $subPageCss2Str.="</div>";
   echo $subPageCss2Str;
  }  
}  
?>   