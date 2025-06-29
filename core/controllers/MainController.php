<?php
namespace core\controllers;
use core\models\PageModel;
use core\models\PhpInfoModel;
use core\models\ContactModel;
use core\models\GenImageModel;
class MainController {
    private $twig;
    private $pageModel;
    private $serviceModel;
    private $phpInfoModel;
    private $contactModel;
    private $genImageModel;
    public function __construct($twig) {
        $this->twig = $twig;
        $this->pageModel = new PageModel();
        $this->phpInfoModel = new PhpInfoModel();
        $this->contactModel = new ContactModel();
        $this->genImageModel = new GenImageModel();
    }

    public function indexAction() {
        echo $this->twig->render('main.twig', [
            'title' => 'Главная страница',
            'welcome' => 'Добро пожаловать на наш сайт!',
            'features0' => $this->pageModel->getHomePageData()['features'][0],
            'features1' => $this->pageModel->getHomePageData()['features'][1],
            'features2' => $this->pageModel->getHomePageData()['features'][2],
            'contact_phone'=>$this->pageModel->getHomePageData()['contact_phone'],
            'contact_email'=>$this->pageModel->getHomePageData()['contact_email'],
        ]);

    }

    public function aboutAction() {
        echo $this->twig->render('about.twig', [
            'title' => 'О нас',
            'about_text' => 'Мы - небольшая компания, занимающаяся созданием сайтов-визиток.',
            'hardSkill' => $this->pageModel->getAboutPageData()['hardSkill'],
            'softSkill' => $this->pageModel->getAboutPageData()['softSkills'],
            'whoIsMe' => $this->pageModel->getAboutPageData()['whoIsMe'],
        ]);
    }

    public function contactsAction() {
        echo $this->twig->render('contacts.twig', [
            'title' => 'Контакты',
            'contactInfo' => $this->contactModel->getContactInfo()
        ]);
    }
    public function generateImageAction() {

        // Отправляем заголовки и выводим изображение
        echo $this->twig->render('contacts.twig', [
            'title' => 'Генерация картинки',
            'imagepng' => $this->genImageModel->generateImageAction(),
        ]);
    }

    public function phpinfoAction() {
        echo $this->twig->render('phpinfo.twig', [
            'title'=> 'Информация о PHP',
            'phpinfo'=>$this->phpInfoModel->getPhpInfo(),
        ]);
    }
}