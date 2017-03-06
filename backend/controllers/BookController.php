<?php

namespace backend\controllers;

use Yii;
use backend\models\Book;
use backend\models\BookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;



/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends Controller
{
    /**
     * @inheritdoc
     */
   // public function behaviors()
   //  {
   //      return [
   //          'access' => [
   //              'class' => AccessControl::className(),
   //              'rules' => [
   //                  [
   //                      'actions' => ['login', 'error'],
   //                      'allow' => true,
   //                  ],
   //                  [
                       
   //                      'allow' => true,
   //                      'roles' => ['@'],
   //                      'matchCallback' => function($rule , $action ){
   //                          $control = Yii::$app->controller->id;
   //                          if (Yii::$app->user->can('manager-post')){
   //                              return true;
   //                          }
   //                      }
   //                  ],
   //              ],
   //          ],
   //          'verbs' => [
   //              'class' => VerbFilter::className(),
   //              'actions' => [
   //                  'logout' => ['post'],
   //                  'delete' => ['post'],
   //              ],
   //          ],
   //      ];
   //  }

   //  /**
   //   * @inheritdoc
   //   */
   //  public function actions()
   //  {
   //      return [
   //          'error' => [
   //              'class' => 'yii\web\ErrorAction',
   //          ],
   //      ];
   //  }

     public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Book model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Book();
        $model->created_at= time();
        $model->update_at = time();

        if ($model->load(Yii::$app->request->post())){
            $model->file = UploadedFile::getinstance($model,'file');
            if($model->file){
                $model->file->saveAs('../../uploads/images'.$model->file->name );
                $model->image =$model->file->name;
            }
             if($model->save(false)) {
                Yii::$app->session->addFlash('success','Them sach moi thanh cong');
                return $this->redirect(['view', 'id'=> $model->id]);} 
                else{
                    Yii::$app->session->addFlash('danger','Them sach moi khong thanh cong');
                    return $this->render('create',[
                            'model' => $model,
                        ]);
                }


            } else {return $this->render('create',['model' => $model,]);

        }
    }

    /**
     * Updates an existing Book model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
       
         if ($model->load(Yii::$app->request->post())){
             $model->update_at = time();


              $model->file = UploadedFile::getinstance($model,'file');
            if($model->file){
                $model->file->saveAs('../../uploads/images'.$model->file->name );
                $model->image =$model->file->name;
            }
             if($model->save(false)) {
                Yii::$app->session->addFlash('success','update moi thanh cong');
                return $this->redirect(['view', 'id'=> $model->id]);} 
                else{
                    Yii::$app->session->addFlash('danger','updatemoi khong thanh cong');
                    return $this->render('update',[
                            'model' => $model,
                        ]);
                }


            }  else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Book model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
