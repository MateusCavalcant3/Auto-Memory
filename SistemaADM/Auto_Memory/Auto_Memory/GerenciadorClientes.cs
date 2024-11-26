using System;
using System.Collections.Generic;

namespace Auto_Memory
{
    public static class ClienteManager
    {
        private static List<Clientes> clientes = new List<Clientes>();

        public static void CadastrarClientes()
        {
            Clientes cliente = new Clientes();
            cliente.CadastrarClientes();
            clientes.Add(cliente);
            Console.WriteLine("Cliente cadastrado com sucesso!");
            Console.ReadKey();
        }

        public static void GerenciarCliente()
        {
            Console.Clear();
            Console.WriteLine("===== Gerenciar Clientes =====");
            Console.WriteLine("1 - Listar Clientes");
            Console.WriteLine("2 - Editar Cliente");
            Console.WriteLine("0 - Voltar");
            Console.Write("\nEscolha uma opção: ");
            string escolha = Console.ReadLine();

            switch (escolha)
            {
                case "1":
                    ListarCliente();
                    break;

                case "2":
                    EditarCliente();
                    break;

                case "0":
                    return;

                default:
                    Console.WriteLine("Opção inválida! Pressione qualquer tecla para tentar novamente.");
                    Console.ReadKey();
                    break;
            }
        }

        private static void ListarCliente()
        {
            if (clientes.Count == 0)
            {
                Console.WriteLine("Não há clientes cadastrados.");
            }
            else
            {
                Console.WriteLine("Clientes cadastrados:");
                foreach (var cliente in clientes)
                {
                    Console.WriteLine($"Nome: {cliente.Nome}, Documento: {cliente.Cpf}");
                }
            }
            Console.ReadKey();
        }

        private static void EditarCliente()
        {
            Console.Write("Digite o nome do cliente que deseja editar: ");
            string nome = Console.ReadLine();
            var cliente = clientes.Find(c => c.Nome.Equals(nome, StringComparison.OrdinalIgnoreCase));

            if (cliente != null)
            {
                Console.Write("Digite o novo nome: ");
                cliente.Nome = Console.ReadLine();
                Console.Write("Digite o novo documento: ");
                cliente.Cpf = Console.ReadLine();
                Console.WriteLine("Cliente atualizado com sucesso!");
            }
            else
            {
                Console.WriteLine("Cliente não encontrado.");
            }
            Console.ReadKey();
        }
    }
}