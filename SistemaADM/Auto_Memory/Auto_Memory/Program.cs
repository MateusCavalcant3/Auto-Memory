using System;
using Auto_Memory;
using AutoMemory;

namespace AutoMemory
{
    class Program
    {
        static void Main(string[] args)
        {
            bool sair = false;

            while (!sair)
            {
                Console.Clear();
                Console.WriteLine("===== Menu Principal =====");
                Console.WriteLine("1 - Dados da Oficina");
                Console.WriteLine("2 - Cadastrar Cliente");
                Console.WriteLine("3 - Cadastrar Carro");
                Console.WriteLine("4 - Cadastrar Funcionário");
                Console.WriteLine("5 - Gerenciar Estoque");
                Console.WriteLine("6 - Cadastrar Fornecedor");
                Console.WriteLine("7 - Gerar Nota Fiscal");
                Console.WriteLine("0 - Sair\n");
                Console.WriteLine("===== Gerenciamentos =====");
                Console.WriteLine("8 - Gerenciar Clientes");
                Console.WriteLine("9 - Gerenciar Despesas");
                Console.Write("\nEscolha uma opção: ");

                string escolha = Console.ReadLine();

                switch (escolha)
                {
                    case "1":
                        OficinaManager.CadastrarOficina();
                        break;

                    case "2":
                        ClienteManager.CadastrarClientes();
                        break;

                    case "3":
                        CarroManager.ExibirMenu();
                        break;

                    case "4":
                        FuncionarioManager.CadastrarFuncionario();
                        break;

                    case "5":
                        EstoqueManager.GerenciarEstoque();
                        break;

                    case "6":
                        FornecedorManager.MenuFornecedor();
                        break;

                    case "7":

                        break;

                    case "8":
                        ClienteManager.GerenciarCliente();
                        break;

                    case "9":
                        DespesasManager.GerenciarDespesas();
                        break;

                    case "0":
                        sair = true;
                        Console.WriteLine("Saindo... Pressione qualquer tecla para sair.");
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