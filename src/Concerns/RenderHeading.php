<?php

namespace Sajadsdi\LaravelSeoBooster\Concerns;

trait RenderHeading
{
    /**
     * @return string
     */
    public function renderMetaHeading(): string
    {
        $heading = '<meta charset="' . $this->getCharset() . '">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="' . $this->getViewport() . '">
                    <title>' . $this->getTitle() . '</title>
                    <meta name="description" content="' . $this->getDescription() . '">
                    <meta name="keywords" content="' . $this->getKeywords() . '">
                    <meta name="author" content="' . $this->getAuthor() . '">
                    <meta name="robots" content="' . $this->getRobots() . '">
                    <link rel="canonical" href="' . $this->getUrl() . '">
                    <link rel="icon" href="' . $this->getIcon() . '" type="image/x-icon">
                    <meta property="og:title" content="' . $this->getTitle() . '">
                    <meta property="og:description" content="' . $this->getDescription() . '">
                    <meta property="og:image" content="' . $this->getImage() . '">
                    <meta property="og:url" content="' . $this->getUrl() . '">
                    <meta property="og:type" content="website">';

        return preg_replace(array('/\s+/', '/\n+/'), array(' ', ''), $heading);
    }
}
