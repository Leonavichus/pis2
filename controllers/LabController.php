<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Lab1Form;
use app\models\Authors;
use app\models\Books;
use app\models\Genre;

class LabController extends Controller
{
    public function actionInfo()
    {
        return $this->render('info');
    }

    public function actionLab1()
    {
        $model = new Lab1Form();
        return $this->render('lab1', ['model' => $model]);
    }

    public function actionCreate()
    {
        $model = new Authors();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['lab/lab2']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Authors::findOne($id);
        $model->delete();
        return $this->redirect(['lab/lab2']);
    }

    public function actionLab2()
    {
        $authorList = Authors::find()->all();
        return $this->render('lab2', [
            'authorList' => $authorList,
        ]);
    }

    public function actionBooks_20()
    {
        $filter = Books::find()
            ->where(['between', 'year_writing', 1900, 1999])
            ->orderBy('year_writing')
            ->all();
        return $this->render('books_20', [
            'filter' => $filter,
        ]);
    }

    public function actionBooks_authors_col()
    {
        $bookAuthors = Authors::find()->all();
        return $this->render('books_authors_col', [
            'bookAuthors' => $bookAuthors,
        ]);
    }

    public function actionLab2_1()
    {
        $model = new Books();
        if ($model->load(Yii::$app->request->post())) {
            $query = Books::find()->where(['like', 'name', $model->findtitle]);
        } else {
            $query = Books::find();
        }
        $bookList = $query->orderBy('id_book')->all();
        return $this->render('lab2_1', [
            'bookList' => $bookList,
            'model' => $model,
        ]);
    }

    public function actionLab2_2()
    {
        $genreList = Genre::find()->all();
        return $this->render('lab2_2', [
            'genreList' => $genreList,
        ]);
    }

    public function actionLab3()
    {
        return $this->render('lab3');
    }
}
