<?
namespace App\Libs;
class Cookie{
	public function deleteAll(){
		if(!isset($_COOKIE)){
			return redirect()->back();
		}
	
		
		foreach($_COOKIE as $key=>$value){
			$id=(int)$key;
			if($id>0){
				setcookie($id,'',time()-1,'/');
			}
		}
	}
}
