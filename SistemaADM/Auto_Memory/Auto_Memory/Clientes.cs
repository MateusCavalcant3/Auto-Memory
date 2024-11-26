using System;
using AutoMemory;

namespace Auto_Memory
{
    public class Clientes
    {
        public string Nome { get; set; }
        public string Email { get; set; }
        public string Cpf { get; set; }
        public string Telefone { get; set; }
        public string Endereco { get; set; }
        public string Cep { get; set; }
        public string DataNasc { get; set; }

        public void CadastrarClientes()
        {
            Console.WriteLine("Cadastro do cliente\n");
            Console.WriteLine("Digite seu nome completo:");
            Nome = Console.ReadLine();
            Cpf = LerCpf();
            Email = LerEmail();
            Telefone = LerTelefone();
            Console.WriteLine("Digite seu endereço:");
            Endereco = Console.ReadLine();
            Cep = LerCep();
            Console.WriteLine("Digite sua data de nascimento:");
            DataNasc = Console.ReadLine();
        }

        private string LerCpf()
        {
            string cpf;
            while (true)
            {
                Console.WriteLine("Digite seu CPF (somente números):");
                cpf = Console.ReadLine();

                if (cpf.Length == 11 && long.TryParse(cpf, out _))
                {
                    return VerificarCpf(cpf);
                }
                else
                {
                    Console.WriteLine("\nCPF inválido. O CPF deve conter exatamente 11 dígitos numéricos.");
                }
            }
        }

        private string VerificarCpf(string cpf)
        {
            return $"{cpf.Substring(0, 3)}.{cpf.Substring(3, 3)}.{cpf.Substring(6, 3)}-{cpf.Substring(9, 2)}";
        }

        private string LerCep()
        {
            string cep;
            while (true)
            {
                Console.WriteLine("Digite seu CEP (somente números, 8 dígitos):");
                cep = Console.ReadLine();

                if (cep.Length == 8 && long.TryParse(cep, out _))
                {
                    return VerificarCep(cep);
                }
                else
                {
                    Console.WriteLine("\nCEP inválido. O CEP deve conter exatamente 8 dígitos numéricos.");
                }
            }
        }

        private string VerificarCep(string cep)
        {
            return $"{cep.Substring(0, 5)}-{cep.Substring(5, 3)}";
        }

        private string LerTelefone()
        {
            string telefone;
            while (true)
            {
                Console.WriteLine("Digite seu telefone (somente números, 11 dígitos):");
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

        private string LerEmail()
        {
            string email;
            while (true)
            {
                Console.WriteLine("Digite seu email:");
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

        public void MostrarDadosCliente()
        {
            Console.WriteLine("\nDados Cadastrados:\n");
            Console.WriteLine($"Nome: {Nome}");
            Console.WriteLine($"CPF: {Cpf}");
            Console.WriteLine($"Email: {Email}");
            Console.WriteLine($"Telefone: {Telefone}");
            Console.WriteLine($"Endereço: {Endereco}");
            Console.WriteLine($"CEP: {Cep}");
            Console.WriteLine($"Data de Nascimento: {DataNasc}");
            Console.ReadKey();
        }
    }
}