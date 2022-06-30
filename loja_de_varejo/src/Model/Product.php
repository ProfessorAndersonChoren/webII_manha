<?php

namespace APP\Model;

class Product
{
    private int $barCode;
    private string $name;
    private float $price;
    private int $quantity;
    private provider $provider;
    private bool $isActive;

    public function __construct(
        float $cost,
        float $tributes,
        float $fixedCost,
        int $barCode,
        string $name,
        int $quantity,
        Provider $provider,
        float $lucre = 0.2,
        bool $isActive = true
    )
    {
        // Inicializando as propriedades
        $this->barCode = $barCode;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->provider = $provider;
        $this->isActive = $isActive;

        // Calcular o preço de venda
        self::calculateSalePrice(
            tributes: $tributes,
            cost: $cost,
            lucre: $lucre,
            fixedCost: $fixedCost
        );
    }

    /**
     * Essa função irá calcular o preço de venda do produto com base nos custos fixos, tributos e custo de aquisição
     *
     * @param float $cost - Custo de aquisição
     * @param float $tributes - Tributos estaduais e municipais
     * @param float $fixedCost - Custos operacionais
     * @param float $lucre - Percentual de margem de lucro
     * @return void
     */
    private function calculateSalePrice(float $cost, float $tributes, float $fixedCost, float $lucre = 0.4): void
    {
        $this->price = ($cost + $tributes + $fixedCost) / (1 - $lucre);
    }
    /**
     * Essa função irá calcular a diferença entre o preço de venda e o custo de aquisição
     *
     * @param float $cost Custo de aquisição
     * @return float    
     */
    public function calculateMarkup(float $cost): float
    {
        return $this->price / $cost;
    }
}
