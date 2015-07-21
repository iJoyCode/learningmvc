<?php namespace App\Components\Core;

class Templater
{
    /**
     * Путь к директории с шаблонами
     *
     * @var string
     */
    private $templatesDir;

    /**
     * Путь к layout для всех шаблонов
     *
     * @var string
     */
    private $layout;

    /**
     * Данные для вывода
     *
     * @var array
     */
    private $data = [];

    public function __construct($templatesDir = './')
    {
        $this->templatesDir = rtrim($templatesDir, '/') . '/';
    }

    /**
     * Метод для выставления общего шаблона
     *
     * @param string $layout
     */
    public function setLayout($layout = 'layout')
    {
        $this->layout = $this->templatesDir . rtrim($layout, '/') . ".php";
    }

    /**
     * Метод для добавления новых значений в данные для вывода
     *
     * @param string $name
     * @param string $value
     */
    public function set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * Метод для удаления значений из данных для вывода
     *
     * @param string $name
     */
    public function delete($name)
    {
        unset($this->data[$name]);
    }

    /**
     * Магический метод для более удобного обращения к данным шаблонизатора
     *
     * @param $name
     *
     * @return string
     */
    public function __get($name)
    {
        if (isset($this->data[$name]))
        {
            return $this->data[$name];
        }

        return '';
    }

    /**
     * @param $template
     */
    public function display($template)
    {
        $template = $this->templatesDir . $template . ".php";

        ob_start();
        include($template);
        $this->data['content'] = ob_get_clean();

        ob_start();
        include($this->layout);
        echo ob_get_clean();
    }
}