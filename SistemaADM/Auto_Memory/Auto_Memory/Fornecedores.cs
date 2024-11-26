using System;
using System.Collections.Generic;
using Auto_Memory;

namespace Auto_Memory
{
    public static class FornecedorManager
    {
        private static List<Fornecedor> fornecedores = new List<Fornecedor>();

        public static void MenuFornecedor()
        {
            bool continuar = true;

            while (continuar)
            {
                Console.Clear();
                Console.WriteLine("===== Menu de Fornecedores =====");
                Console.WriteLine("1 - Cadastrar Fornecedor");
                Console.WriteLine("2 - Mostrar Fornecedores Cadastrados");
                Console.WriteLine("3 - Voltar ao Menu Principal");
                Console.Write("Escolha uma opção: ");
                string opcao = Console.ReadLine();

                switch (opcao)
                {
                    case "1":
                        CadastrarFornecedor();
                        break;
                    case "2":
                        MostrarFornecedores();
                        break;
                    case "3":
                        continuar = false;
                        break;
                    default:
                        Console.WriteLine("Opção inválida. Pressione qualquer tecla para tentar novamente.");
                        Console.ReadKey();
                        break;
                }
            }
        }

        public static void CadastrarFornecedor()
        {
            Fornecedor fornecedor = new Fornecedor();
            fornecedor.CadastrarFornecedor();
            fornecedores.Add(fornecedor);
            Console.WriteLine("Fornecedor cadastrado com sucesso! Pressione qualquer tecla para voltar ao menu.");
            Console.ReadKey();
        }

        public static void MostrarFornecedores()
        {
            Console.Clear();
            if (fornecedores.Count == 0)
            {
                Console.WriteLine("Não há fornecedores cadastrados.");
            }
            else
            {
                Console.WriteLine("===== Fornecedores Cadastrados =====");
                foreach (var fornecedor in fornecedores)
                {
                    Console.WriteLine($"Nome: {fornecedor.Nome}");
                    Console.WriteLine($"CNPJ: {fornecedor.CNPJ}");
                    Console.WriteLine($"Endereço: {fornecedor.Endereco}");
                    Console.WriteLine($"Email: {fornecedor.Email}");
                    Console.WriteLine($"Telefone: {fornecedor.Telefone}\n");
                }
            }

            Console.WriteLine("Pressione qualquer tecla para voltar ao menu.");
            Console.ReadKey();
        }

        public class Fornecedor
        {
            public string Nome { get; set; }
            public string CNPJ { get; set; }
            public string Endereco { get; set; }
            public string Email { get; set; }
            public string Telefone { get; set; }

            public void CadastrarFornecedor()
            {
                Console.Clear();
                Console.WriteLine("Cadastro de Fornecedor\n");

                Console.Write("Digite o nome do fornecedor: ");
                Nome = Console.ReadLine();

                CNPJ = LerCnpj();

                Console.Write("Digite o endereço do fornecedor: ");
                Endereco = Console.ReadLine();

                Email = LerEmail();
                Telefone = LerTelefone();
            }

            private string LerCnpj()
            {
                string cnpj;
                while (true)
                {
                    Console.Write("Digite o CNPJ do fornecedor (somente números): ");
                    cnpj = Console.ReadLine();

                    if (cnpj.Length == 14 && long.TryParse(cnpj, out _))
                    {
                        return VerificarCnpj(cnpj);
                    }
                    else
                    {
                        Console.WriteLine("\nCNPJ inválido. O CNPJ deve conter exatamente 14 dígitos numéricos.");
                    }
                }
            }

            private string VerificarCnpj(string cnpj)
            {
                return $"{cnpj.Substring(0, 2)}.{cnpj.Substring(2, 3)}.{cnpj.Substring(5, 3)}/{cnpj.Substring(8, 4)}-{cnpj.Substring(12, 2)}";
            }

            private string LerEmail()
            {
                string email;
                while (true)
                {
                    Console.WriteLine("Digite o email do fornecedor:");
                    email = Console.ReadLine();

                    int atIndex = email.IndexOf('@');
                    int dotIndex = email.IndexOf('.', atIndex);

                    if (atIndex > 0 && dotIndex > atIndex + 1 && dotIndex < email.Length - 1)
                    {
                        return email;
                    }
                    else
                    {
                        Console.WriteLine("Email inválido. Certifique-se de que o email contenha um '@' e um domínio válido.");
                    }
                }
            }

            private string LerTelefone()
            {
                string telefone;
                while (true)
                {
                    Console.WriteLine("Digite o telefone do fornecedor (somente números, 11 dígitos):");
                    telefone = Console.ReadLine();

                    if (telefone.Length == 11 && long.TryParse(telefone, out _))
                    {
                        return VerificarTelefone(telefone);
                    }
                    else
                    {
                        Console.WriteLine("\nTelefone inválido. O telefone deve conter exatamente 11 dígitos numéricos.");
                    }
                }
            }

            private string VerificarTelefone(string telefone)
            {
                return $"({telefone.Substring(0, 2)}) {telefone.Substring(2, 5)}-{telefone.Substring(7, 4)}";
            }
        }
    }
}