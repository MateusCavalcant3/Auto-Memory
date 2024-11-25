using System;
using System.Collections.Generic;

namespace AutoMemory
{
    public static class CarroManager
    {
        public class Carro
        {
            public int IdCarro { get; set; }
            public string Modelo { get; set; }
            public string Placa { get; set; }
            public int Ano { get; set; }
            public string Cor { get; set; }
            public string Marca { get; set; }
            public int IdCliente { get; set; }
            public string CarroConcerto { get; set; }
            public string CarroVenda { get; set; }
        }

        private static List<Carro> carros = new List<Carro>();
        private static int idCounter = 1;

        public static void ExibirMenu()
        {
            while (true)
            {
                Console.Clear();
                Console.WriteLine("Gerenciamento de Carros");
                Console.WriteLine("1. Cadastrar Carro");
                Console.WriteLine("2. Listar Carros");
                Console.WriteLine("3. Atualizar Carro");
                Console.WriteLine("4. Deletar Carro");
                Console.WriteLine("5. Sair");
                Console.Write("Escolha uma opção: ");

                string opcao = Console.ReadLine();
                switch (opcao)
                {
                    case "1":
                        CadastrarCarro();
                        break;
                    case "2":
                        ListarCarros();
                        break;
                    case "3":
                        AtualizarCarro();
                        break;
                    case "4":
                        DeletarCarro();
                        break;
                    case "5":
                        return;
                    default:
                        Console.WriteLine("Opção inválida! Tente novamente.");
                        break;
                }
            }
        }

        public static void CadastrarCarro()
        {
            Console.Clear();
            Console.WriteLine("Adicionar Carro");

            if (idCounter > 10)
            {
                Console.WriteLine("Número máximo de carros cadastrados alcançado.");
                AguardarContinuar();
                return;
            }

            Carro carro = new Carro
            {
                IdCarro = idCounter++,
                Modelo = ObterEntrada("Modelo"),
                Placa = ObterEntradaPlaca("Placa"),
                Ano = int.Parse(ObterEntrada("Ano")),
                Cor = ObterEntrada("Cor"),
                Marca = ObterEntrada("Marca"),
                CarroConcerto = ObterEntrada("Necessita de concerto (Sim/Não)"),
                CarroVenda = ObterEntrada("Disponível para venda (Sim/Não)")
            };

            carros.Add(carro);
            Console.WriteLine("Carro adicionado com sucesso!");
            AguardarContinuar();
        }

        public static void ListarCarros()
        {
            Console.Clear();
            Console.WriteLine("Lista de Carros");

            if (carros.Count == 0)
            {
                Console.WriteLine("Não há carros cadastrados.");
            }
            else
            {
                foreach (var carro in carros)
                {
                    Console.WriteLine($"ID: {carro.IdCarro}\nModelo: {carro.Modelo}\nPlaca: {carro.Placa}\nAno: {carro.Ano}\nCor: {carro.Cor}\nMarca: {carro.Marca}\nID Cliente: {carro.IdCliente}\nConcerto: {carro.CarroConcerto}\nVenda: {carro.CarroVenda}");
                }
            }
            AguardarContinuar();
        }

        private static void AtualizarCarro()
        {
            Console.Clear();
            Console.WriteLine("Atualizar Carro");

            int idCarro = int.Parse(ObterEntrada("ID do Carro a ser atualizado"));
            Carro carro = carros.Find(c => c.IdCarro == idCarro);

            if (carro != null)
            {
                carro.Modelo = ObterEntrada($"Modelo (atual: {carro.Modelo})");
                carro.Placa = ObterEntradaPlaca($"Placa (atual: {carro.Placa})");
                carro.Ano = int.Parse(ObterEntrada($"Ano (atual: {carro.Ano})"));
                carro.Cor = ObterEntrada($"Cor (atual: {carro.Cor})");
                carro.Marca = ObterEntrada($"Marca (atual: {carro.Marca})");
                carro.CarroConcerto = ObterEntrada($"Necessita de Concerto (atual: {carro.CarroConcerto})");
                carro.CarroVenda = ObterEntrada($"Disponível para venda (atual: {carro.CarroVenda})");

                Console.WriteLine("Carro atualizado com sucesso!");
            }
            else
            {
                Console.WriteLine("Carro não encontrado!");
            }

            AguardarContinuar();
        }

        private static void DeletarCarro()
        {
            Console.Clear();
            Console.WriteLine("Deletar Carro");

            int idCarro = int.Parse(ObterEntrada("ID do Carro a ser deletado"));
            Carro carro = carros.Find(c => c.IdCarro == idCarro);

            if (carro != null)
            {
                carros.Remove(carro);
                AtualizarIds();
                Console.WriteLine("Carro deletado com sucesso!");
            }
            else
            {
                Console.WriteLine("Carro não encontrado!");
            }

            AguardarContinuar();
        }

        private static void AtualizarIds()
        {
            for (int i = 0; i < carros.Count; i++)
            {
                carros[i].IdCarro = i + 1;
            }

            idCounter = carros.Count + 1;
        }

        private static void AguardarContinuar()
        {
            Console.WriteLine("Pressione qualquer tecla para continuar...");
            Console.ReadKey();
        }

        private static string ObterEntrada(string campo)
        {
            Console.Write($"{campo}: ");
            return Console.ReadLine();
        }

        private static string ObterEntradaPlaca(string campo)
        {
            string placa;
            while (true)
            {
                Console.Write($"{campo}: ");
                placa = Console.ReadLine();

                if (placa.Length == 7 &&
                    char.IsLetter(placa[0]) && char.IsLetter(placa[1]) && char.IsLetter(placa[2]) &&
                    char.IsDigit(placa[3]) && char.IsDigit(placa[4]) && char.IsDigit(placa[5]) && char.IsDigit(placa[6]))
                {
                    return placa;
                }
                else
                {
                    Console.WriteLine("Placa inválida! A placa deve conter 3 letras seguidas por 4 números (ex: ABC1234).");
                }
            }
        }
    }
}
