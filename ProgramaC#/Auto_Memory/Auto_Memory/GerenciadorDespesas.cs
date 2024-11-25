using System;
using System.Collections.Generic;

namespace Auto_Memory
{
    public static class DespesasManager
    {
        private static List<Despesas> despesas = new List<Despesas>();

        public static void GerenciarDespesas()
        {
            Console.Clear();
            Console.WriteLine("===== Gerenciar Despesas =====");
            Console.WriteLine("1 - Adicionar Despesa");
            Console.WriteLine("2 - Listar Despesas");
            Console.WriteLine("0 - Voltar");
            Console.Write("\nEscolha uma opção: ");
            string escolha = Console.ReadLine();

            switch (escolha)
            {
                case "1":
                    AdicionarDespesa();
                    break;

                case "2":
                    ListarDespesas();
                    break;

                case "0":
                    return;

                default:
                    Console.WriteLine("Opção inválida! Pressione qualquer tecla para tentar novamente.");
                    Console.ReadKey();
                    break;
            }
        }

        private static void AdicionarDespesa()
        {
            Console.Write("Digite a descrição da despesa: ");
            string descricao = Console.ReadLine();
            Console.Write("Digite o valor da despesa: ");
            double valor = Convert.ToDouble(Console.ReadLine());
            Console.Write("Digite a categoria da despesa: ");
            string categoria = Console.ReadLine();

            Despesas despesa = new Despesas
            {
                Descricao = descricao,
                Valor = valor,
                Data = DateTime.Now,
                Categoria = categoria
            };

            despesas.Add(despesa);
            Console.WriteLine("Despesa registrada com sucesso!");
            Console.ReadKey();
        }

        private static void ListarDespesas()
        {
            if (despesas.Count == 0)
            {
                Console.WriteLine("Não há despesas registradas.");
            }
            else
            {
                Console.WriteLine("Despesas registradas:");
                foreach (var despesa in despesas)
                {
                    Console.WriteLine($"Descrição: {despesa.Descricao}, Valor: {despesa.Valor:C}, Data: {despesa.Data.ToShortDateString()}, Categoria: {despesa.Categoria}");
                }
            }
            Console.ReadKey();
        }
    }

    public class Despesas
    {
        public string Descricao { get; set; }
        public double Valor { get; set; }
        public DateTime Data { get; set; }
        public string Categoria { get; set; }
    }
}
