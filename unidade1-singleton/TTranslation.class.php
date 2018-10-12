<?php
/**
 * Classe TTranslation
 * Classe utilitária para tradução de textos
 */
class TTranslation 
{
    private static $instance; // Instância de TTranslation
    private $lang;            // Linguagem destino

    /**
     * Método __construct()
     * Instancia um objeto TTranslation
     */
    private function __construct()
    {
        $this->messages['en'][] = 'Function';
        $this->messages['en'][] = 'Table'; 
        $this->messages['en'][] = 'Tool';

        $this->messages['pt'][] = 'Função';
        $this->messages['pt'][] = 'Tabela';
        $this->messages['pt'][] = 'Ferramenta';

        $this->messages['it'][] = 'Funzione';
        $this->messages['it'][] = 'Tabelle';
        $this->messages['it'][] = 'Strumento';
    }
    
    /**
     * Método getInstance()
     * Retorna a única instância de TTranslation
     */
    public static function getInstance()
    {
        // Verifica se não existe uma instância ainda
        if (empty(self::$instance))
        {
            // Instancia um objeto
            self::$instance = new TTranslation;
        }

        // Retorna a instância
        return self::$instance;
    }
    
    /**
     * Método setLanguage()
     * Define a linguagem a ser utilizada
     * @param $lang = linguagem (en,pt,it) 
     */
    public static function setLanguage($lang)
    {
        $instance = self::getInstance(); 
        $instance->lang = $lang;
    }

    /**
     * Método getLanguage()
     * Retorna a linguagem atual
     */
    public static function getLanguage()
    {
        $instance = self::getInstance(); 
        return $instance->lang;
    }

    /**
     * Méetodo Translate()
     * Traduz uma palavra para a linguagem definida
     * @param $word = Palavra a ser traduzida
     */
    public function Translate($word)
    {
        // Obtém a instância atual
        $instance = self::getInstance();
        // Busca o índice numérico da palavra dentro do vetor 
        $key = array_search($word, $instance->messages['en']);

        // Obtém a linguagem para tradução
        $language = self::getLanguage();
        // retorna a palavra traduzida
        // vetor indexado pela linguagem e pela chave 
        return $instance->messages[$language][$key];
    }
}

/**
 * Método _t()
 * Fachada para o método Translate da classe Translation
 * @param $word = Palavra a ser traduzida
 */
function _t($word)
{
    return @TTranslation::Translate($word);
}

?>