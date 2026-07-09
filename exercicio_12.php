<!-- Um supermercado deseja organizar automaticamente seu catálogo de produtos.
Crie uma função chamada analisarProdutos() que receba um vetor contendo o
nome e o preço dos produtos.
A função deverá retornar:
● Produto mais caro;
● Produto mais barato;
● Média dos preços;
● Pesquisa de um produto informado pelo usuário.
 -->
<?php
function analisarProdutos($produtos, $produtoPesquisa) {
    $produtoMaisCaro = null;
    $produtoMaisBarato = null;
    $somaPrecos = 0;
    $quantidadeProdutos = count($produtos);
    $produtoEncontrado = null;

    foreach ($produtos as $produto) {
        if ($produtoMaisCaro === null || $produto['preco'] > $produtoMaisCaro['preco']) {
            $produtoMaisCaro = $produto;
        }
        if ($produtoMaisBarato === null || $produto['preco'] < $produtoMaisBarato['preco']) {
            $produtoMaisBarato = $produto;
        }
        $somaPrecos += $produto['preco'];

        if (strcasecmp($produto['nome'], $produtoPesquisa) === 0) {
            $produtoEncontrado = $produto;
        }
    }

    $mediaPrecos = $quantidadeProdutos > 0 ? $somaPrecos / $quantidadeProdutos : 0;

    return [
        'maisCaro' => $produtoMaisCaro,
        'maisBarato' => $produtoMaisBarato,
        'mediaPrecos' => $mediaPrecos,
        'pesquisaProduto' => $produtoEncontrado
    ];
}