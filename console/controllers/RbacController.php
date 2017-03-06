<?php 	
namespace console\controllers;
use yii\console\Controller;
use Yii;

/**
* 
*/
class RbacController extends Controller
{
	public function  actionInit()
	{

		# code...
		
		$auth = Yii::$app->authManager;
		// Them perminsstion
		// $indexBook = $auth->createPermission('index-book');
		// $indexBook->description = 'xem danh sach book';
		// $auth->add($indexBook);


		// $viewBook = $auth->createPermission('view-book');
		// $viewBook->description = 'xem chi tiet danh sach book';
		// $auth->add($viewBook);


		// $updateBook = $auth->createPermission('update-book');
		// $updateBook->description = 'chinh sua book';
		// $auth->add($updateBook);


		// $delelteBook = $auth->createPermission('delete-book');
		// $delelteBook->description = 'xoa  book';
		// $auth->add($delelteBook);

		// Them nhhom quyen

		 $bookManager = $auth->createRole('manager-book');
		// $auth->add($bookManager);

		// //gan quyen cho nhom
		// $deleteBook = $auth->createPermission('delete-book');
		// //$indexBook = $auth->createPermission('index-book');
		// $createBook = $auth->createPermission('create-book');
		// $viewBook = $auth->createPermission('view-book');
		// $updateBook = $auth->createPermission('update-book');
		// $bookManager = $auth->createRole('manager-book');
	
		// $auth->addChild($bookManager, $createBook);
		// $auth->addChild($bookManager, $updateBook);
		// $auth->addChild($bookManager, $deleteBook);
		// $auth->addChild($bookManager, $viewBook);
		 $admin = $auth->createRole('admin');
		// $auth->add($admin);
			//$auth->addChild($admin,$bookManager);
			$auth->assign($admin,10);
			$auth->assign($bookManager,11);
			}
}
?>