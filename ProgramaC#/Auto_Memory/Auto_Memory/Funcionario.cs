using System;
using System.Collections.Generic;
using Auto_Memory;

namespace Auto_Memory
{
    public class FuncionarioManager
    {
        private static Dictionary<string, int> vagasDisponiveis = new Dictionary<string, int>
        {
            { "Gerente", 2 },
            { "Mecânico", 2 },
            { "Faxineiro", 1 },
            { "Contabilista", 2 },
            { "Analista de Logística", 2 },
            { "Gestor de Recursos Humanos", 2 }
        };

        public static int GetVagasDisponiveis(string cargo)
        {
            if (vagasDisponiveis.ContainsKey(cargo))
            {
                return vagasDisponiveis[cargo];
            }
            return 0;
        }

        public static void DiminuirVaga(string cargo)
        {
            if (vagasDisponiveis.ContainsKey(cargo) && vagasDisponiveis[cargo] > 0)
            {
                vagasDisponiveis[cargo]--;
            }
        }

        public static void MostrarVagasDisponiveis()
        {
            Console.WriteLine("\nVagas disponíveis por cargo:");
            foreach (var vaga in vagasDisponiveis)
            {
                Console.WriteLine($"{vaga.Key}: {vaga.Value} vagas restantes");
            }
        }

        public static void CadastrarFuncionario()
        {
            Funcionario funcionario = new Funcionario();
            funcionario.CadastrarFuncionario();
            funcionario.MostrarDadosFuncionario();
            MostrarVagasDisponiveis();
        }


        public class Funcionario : Clientes
        {
            public string Cargo { get; set; }
            public int QntdFunc { get; set; }
            public decimal Salario { get; set; }
            public TimeSpan HoraEntrada { get; set; }
            public TimeSpan HoraSaida { get; set; }
            public string Escala { get; set; }
            public string EstadoCivil { get; set; }
            public long NumeroConta { get; set; }
            public int IdOficina { get; set; }

            public void CadastrarFuncionario()
            {
                CadastrarClientes();
                Cargo = SelecionarCargo();
                Salario = AtribuirSalarioPorCargo(Cargo);
                HoraEntrada = ObterHoraEntradaSaida(Cargo, true);
                HoraSaida = ObterHoraEntradaSaida(Cargo, false);
                Escala = "5x2";
                EstadoCivil = LerEstadoCivil();
                NumeroConta = LerNumeroConta();
                Console.WriteLine("Digite o ID da oficina:");
                IdOficina = int.Parse(Console.ReadLine());
            }

            private TimeSpan ObterHoraEntradaSaida(string cargo, bool isEntrada)
            {
                switch (cargo)
                {
                    case "Gerente":
                        return isEntrada ? TimeSpan.Parse("08:00") : TimeSpan.Parse("16:00");
                    case "Mecânico":
                        return isEntrada ? TimeSpan.Parse("07:30") : TimeSpan.Parse("16:00");
                    case "Faxineiro":
                        return isEntrada ? TimeSpan.Parse("09:00") : TimeSpan.Parse("16:00");
                    case "Contabilista":
                        return isEntrada ? TimeSpan.Parse("08:00") : TimeSpan.Parse("16:00");
                    case "Analista de Logística":
                        return isEntrada ? TimeSpan.Parse("08:00") : TimeSpan.Parse("16:00");
                    case "Gestor de Recursos Humanos":
                        return isEntrada ? TimeSpan.Parse("08:00") : TimeSpan.Parse("16:00");
                    default:
                        return TimeSpan.Zero;
                }
            }

            private string SelecionarCargo()
            {
                string cargoEscolhido = "";
                while (true)
                {
                    Console.WriteLine("Selecione o cargo (Digite o número correspondente):");
                    Console.WriteLine("1 - Gerente (2 vagas)");
                    Console.WriteLine("2 - Mecânico (2 vagas)");
                    Console.WriteLine("3 - Faxineiro (1 vaga)");
                    Console.WriteLine("4 - Contabilista (2 vagas)");
                    Console.WriteLine("5 - Analista de Logística (2 vagas)");
                    Console.WriteLine("6 - Gestor de Recursos Humanos (2 vagas)");

                    string escolha = Console.ReadLine();

                    switch (escolha)
                    {
                        case "1":
                            cargoEscolhido = "Gerente";
                            break;
                        case "2":
                            cargoEscolhido = "Mecânico";
                            break;
                        case "3":
                            cargoEscolhido = "Faxineiro";
                            break;
                        case "4":
                            cargoEscolhido = "Contabilista";
                            break;
                        case "5":
                            cargoEscolhido = "Analista de Logística";
                            break;
                        case "6":
                            cargoEscolhido = "Gestor de Recursos Humanos";
                            break;
                        default:
                            Console.WriteLine("Opção inválida. Tente novamente.");
                            continue;
                    }

                    if (FuncionarioManager.GetVagasDisponiveis(cargoEscolhido) > 0)
                    {
                        FuncionarioManager.DiminuirVaga(cargoEscolhido);
                        break;
                    }
                    else
                    {
                        Console.WriteLine($"Não há vagas disponíveis para o cargo de {cargoEscolhido}. Escolha outro cargo.");
                    }
                }

                return cargoEscolhido;
            }

            private decimal AtribuirSalarioPorCargo(string cargo)
            {
                switch (cargo)
                {
                    case "Gerente":
                        return 1887.00m;
                    case "Mecânico":
                        return 1354.00m;
                    case "Faxineiro":
                        return 890.00m;
                    case "Contabilista":
                        return 1631.00m;
                    case "Analista de Logística":
                        return 1789.00m;
                    case "Gestor de Recursos Humanos":
                        return 1897.00m;
                    default:
                        return 0.00m;
                }
            }

            private long LerNumeroConta()
            {
                long numeroConta;
                while (true)
                {
                    Console.WriteLine("Digite o número da conta bancária (10 a 12 dígitos):");
                    if (long.TryParse(Console.ReadLine(), out numeroConta))
                    {
                        int tamanhoConta = numeroConta.ToString().Length;
                        if (tamanhoConta >= 10 && tamanhoConta <= 12)
                        {
                            return numeroConta;
                        }
                        else
                        {
                            Console.WriteLine("Número da conta inválido. A conta deve ter entre 10 e 12 dígitos.");
                        }
                    }
                    else
                    {
                        Console.WriteLine("Número de conta inválido. Insira apenas números.");
                    }
                }
            }

            private string LerEstadoCivil()
            {
                Console.WriteLine("Digite o estado civil (ex: Solteiro, Casado, etc.):");
                return Console.ReadLine();
            }


            public void MostrarDadosFuncionario()
            {
                Console.WriteLine("\nDados Específicos do Funcionário:\n");
                Console.WriteLine($"Cargo: {Cargo}");
                Console.WriteLine($"Salário: {Salario:C}");
                Console.WriteLine($"Hora de Entrada: {HoraEntrada}");
                Console.WriteLine($"Hora de Saída: {HoraSaida}");
                Console.WriteLine($"Escala: {Escala}");
                Console.WriteLine($"Estado Civil: {EstadoCivil}");
                Console.WriteLine($"Número da Conta: {NumeroConta}");
                Console.WriteLine($"ID da Oficina: {IdOficina}");
                MostrarDadosCliente();
                Console.ReadKey();
            }
        }
    }
}