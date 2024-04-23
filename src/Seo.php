<?php

namespace Sajadsdi\LaravelSeoBooster;

use ReflectionException;
use Sajadsdi\DtoTool\Concerns\DTOTrait;
use Sajadsdi\LaravelSeoBooster\Concerns\RenderHeading;

/**
 * @method getCharset()
 * @method getViewport()
 * @method getTitle()
 * @method getDescription()
 * @method getKeywords()
 * @method getAuthor()
 * @method getRobots()
 * @method getUrl()
 * @method getIcon()
 * @method getImage()
 *
 * @method setCharset(string $charset)
 * @method setViewport(string $viewport)
 * @method setKeywords(string $keywords)
 * @method setAuthor(string $author)
 * @method setRobots(string $robots)
 * @method setUrl(string $url)
 * @method setIcon(string $icon)
 * @method setImage(string $image)
 *
 * @method renderMetaHeading()()
 */
class Seo
{
    use DTOTrait, RenderHeading;

    protected array $config;

    private string $title;
    private string $url;
    private string $charset;
    private string $viewport;
    private string $robots;
    private string $description;
    private string $keywords;
    private string $image;
    private string $author;
    private string $icon;

    /**
     * @throws ReflectionException
     */
    public function __construct()
    {
        $this->config = config('seo');
        $this->reset();
    }

    /**
     * @param $title
     * @return void
     */
    public function setTitle($title): void
    {
        if ($this->title) {
            $this->title .= " {$this->config['title_separator']} " . $title;
        } else {
            $this->title = $title;
        }
    }

    public function setDescription($description): void
    {
        $this->description = strip_tags($description);
    }

    /**
     * @throws ReflectionException
     */
    public function reset()
    {
        $this->title       = "";
        $this->description = "";
        $this->url         = url()->current();
        $this->init($this->config);
    }
}
