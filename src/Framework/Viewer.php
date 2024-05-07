<?php

namespace Framework;

class Viewer
{
    public function render(string $template, array $data = []): string
    {
        extract($data, EXTR_SKIP);

        ob_start();

        require ROOT_PATH . "/views/$template";

        return ob_get_clean();
    }
}
?>