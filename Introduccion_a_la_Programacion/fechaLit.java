import java.util.Scanner;

public class fechaLit {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        String mesaLiteral[] = {
                "Enero", "febrero", "marzo", "abril", "mayo",
                "junio", "agosto", "septiemnbre", "octubre",
                "noviembre", "diciembre"
        };
        System.out.println("Ingrese una fecha dd/mm/aaaa como numeros:");
        System.err.println("(Перевод: Введите дату в формате дд/мм/гггг:)");
        String fetchA = sc.nextLine();

        String datosSeparados[]=fetchA.split("/");

        int d = Integer.parseInt(datosSeparados[0]);
        int m = Integer.parseInt(datosSeparados[1]);
        int a = Integer.parseInt(datosSeparados[2]);

        System.err.println("День:");
        System.out.println(d);
        System.err.println("Месяц:");
        System.out.println(m);
        System.err.println("Год:");
        System.out.println(a);
    }
}