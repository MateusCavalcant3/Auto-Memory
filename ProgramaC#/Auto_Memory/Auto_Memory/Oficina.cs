using System;
using Auto_Memory;

namespace Auto_Memory
{
    public static class OficinaManager
    {
        public static void CadastrarOficina()
        {
            Oficina oficina = new Oficina
            {
                Nome = "Auto Memory",
                Endereco = "São Paulo, Rua Fagundes Gomes 1114, Bairro Luz do Amanhã",
                CNPJ = "23.457.659/8757-24",
                Cep = "09028-367"
            };

            Console.WriteLine($"\nNome: {oficina.Nome}");
            Console.WriteLine($"Endereço: {oficina.Endereco}");
            Console.WriteLine($"CNPJ: {oficina.CNPJ}");
            Console.WriteLine($"CEP: {oficina.Cep}");

            Console.WriteLine("\nPressione qualquer tecla para voltar ao menu.");
            Console.ReadKey();
        }

        public class Oficina
        {
            public string Nome { get; set; }
            public string Endereco { get; set; }
            public string CNPJ { get; set; }
            public string Cep { get; set; }
        }
    }
}