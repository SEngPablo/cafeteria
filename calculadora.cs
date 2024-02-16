using System;

namespace Calculadora
{
    class Calculadora
{
        static void Main(string[] args)
        {
            Menu();
        }
    
        public static void Menu()
        {
            Console.Clear();
            Console.WriteLine("Menu:");
            Console.WriteLine("1 - Somar");
            Console.WriteLine("2 - Subtrair");
            Console.WriteLine("3 - Multiplicar");
            Console.WriteLine("4 - Dividir");
            Console.WriteLine("5 - Resto da divisão");
            Console.WriteLine("6 - Potenciação");
            Console.WriteLine("0 - Sair");
    
            string opcao = Console.ReadLine();
    
            switch (opcao)
            {
                case "1":
                    Somar();
                    break;
                case "2":
                    Subtrair();
                    break;
                case "3":
                    Multiplicar();
                    break;
                case "4":
                    Dividir();
                    break;
                case "5":
                    EncontrarRestoDivisao();
                    break;
                case "6":
                    CalcularPotenciacao();
                    break;
                case "0":
                    break;
                default:
                    Menu();
                    break;
                
            }
            
        }
    
    
    
    public static void Somar()
    {
        double valor1, valor2;
    
        Console.WriteLine("Entre com o primeiro valor:");
        valor1 = double.Parse(Console.ReadLine());
        Console.WriteLine("Entre com o segundo valor:");
        valor2 = double.Parse(Console.ReadLine());
    
        Console.WriteLine($"{valor1} + {valor2} = {valor1 + valor2}");
        Console.ReadLine();
        Menu();
    }
    }
}

