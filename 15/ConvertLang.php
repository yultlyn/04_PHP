<?php
class ConvertLang
{
    /**
     * 2文字の言語記号(ja)によって各国の挨拶に変換
     *
     * @param string $lang 2文字の言語記号
     * @param array $totalLang
     * @return string 各国の挨拶
     */
    public function getConvertLang (string $lang, array $totalLang): string
    {
        if (empty($lang)) return null;

        for ($i = 0; $i < count($totalLang); $i++) {
            if ($lang == $totalLang[$i]['nation']) {
                return $totalLang[$i]['greeting'];
            }
        }
    }
}
