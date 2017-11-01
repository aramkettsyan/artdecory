<?php

namespace app\controllers;

use Yii;
use \app\components\AdminAccessControl;
use \app\models\AdminLoginForm;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Wallpaper;
use app\models\WallpaperSearch;

class AdminsController extends Controller
{
    public $layout = '/admin';

    public function behaviors() {
        if (\Yii::$app->user->identity) {
            $access = ['access' => [
                'class' => AccessControl::className(),
                'user' => 'user',
                'rules' => [
                    [
                        'allow' => false,
                        'roles' => ['@'],
                    ]
                ],
                'denyCallback' => function($rule, $action) {
                    throw new \yii\web\NotFoundHttpException();
                }
            ]];
        } else {
            $access = [
                'access' => [
                    'class' => AdminAccessControl::className(),
                    'rules' => [
                        [
                            'actions' => ['logout', 'index','site-settings', 'upload-image', 'delete-section', 'delete-sub-section', 'redirect-and-set-flash',
                                'wallpaper','wallpaper-create','wallpaper-view','wallpaper-update','wallpaper-delete',
                                ],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                        [
                            'actions' => ['login'],
                            'allow' => true,
                            'roles' => ['?']
                        ],
                    ],
                    'denyCallback' => function($rule, $action) {
                        throw new \yii\web\NotFoundHttpException();
                    }
                ]
            ];
        }

        return $access;
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin() {
        $model = new AdminLoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/admins/index');
        } else {
            return $this->render('login', ['model' => $model]);
        }
    }

    public function actionLogout() {
        Yii::$app->admin->logout();
        $this->goHome();
    }




    /**
     * Lists all Wallpaper models.
     * @return mixed
     */
    public function actionWallpaper()
    {
        $searchModel = new WallpaperSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('wallpaper', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Wallpaper model.
     * @param integer $id
     * @return mixed
     */
    public function actionWallpaperView($id)
    {
        return $this->render('wallpaper-view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Wallpaper model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionWallpaperCreate()
    {
        $model = new Wallpaper();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('wallpaper-create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Wallpaper model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionWallpaperUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('wallpaper-update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Wallpaper model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionWallpaperDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Wallpaper model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Wallpaper the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Wallpaper::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
