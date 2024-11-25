using System;
using System.Collections.Generic;
using Auto_Memory;

namespace Auto_Memory
{
    public class Estoque
    {
        private List<Produto> produtos = new List<Produto>();

        public void AdicionarProduto()
        {
            Console.Write("Digite o nome do produto: ");
            string nome = Console.ReadLine();

            Console.Write("Digite o preço do produto: ");
            decimal preco = decimal.Parse(Console.ReadLine());

            Produto produto = new Produto(nome, preco);
            produtos.Add(produto);

            Console.WriteLine("Produto adicionado com sucesso!");
            Console.ReadKey();
        }

        public void ListarProdutos()
        {
            if (produtos.Count == 0)
            {
                Console.WriteLine("Não há produtos cadastrados.");
            }
            else
            {
                Console.WriteLine("Produtos cadastrados:");
                foreach (var produto in produtos)
                {
                    Console.WriteLine($"Nome: {produto.Nome}, Preço: {produto.Preco:C}");
                }
            }
            Console.ReadKey();
        }
    }

    public class Produto
    {
        public string Nome { get; set; }
        public decimal Preco { get; set; }

        public Produto(string nome, decimal preco)
        {
            Nome = nome;
            Preco = preco;
        }
    }

    public static class EstoqueManager
    {
        private static Estoque estoque = new Estoque();

        public static void AdicionarProduto()
        {
            estoque.AdicionarProduto();
        }

        public static void ListarProdutos()
        {
            estoque.ListarProdutos();
        }

        public static void GerenciarEstoque()
        {
            bool sair = false;
            while (!sair)
            {
                Console.Clear();
                Console.WriteLine("===== Gerenciamento de Estoque =====");
                Console.WriteLine("1 - Adicionar Produto");
                Console.WriteLine("2 - Listar Produtos");
                Console.WriteLine("0 - Voltar ao Menu Principal");
                Console.Write("\nEscolha uma opção: ");

                string escolha = Console.ReadLine();

                switch (escolha)
                {
                    case "1":
                        AdicionarProduto();
                        break;

                    case "2":
                        ListarProdutos();
                        break;

                    case "0":
                        sair = true;
                        break;

                    default:
                        Console.WriteLine("Opção inválida! Pressione qualquer tecla para tentar novamente.");
                        Console.ReadKey();
                        break;
                }
            }
        }
    }
}