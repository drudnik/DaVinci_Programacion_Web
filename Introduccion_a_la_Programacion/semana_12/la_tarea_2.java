/*
RegistrarenunarraylasnotasdeungrupodeNestudiantes,estas serán ingresadas por el usuario una por una hasta que se ingrese -1 o hasta que se hayan ingresado 15 notas como máximo.
Te pedimos determinar cuántos estudiantes aprobaron (nota > 4), de éstos cuántos deben presentar TP (nota >= 7) y cuántos rinden escrito (nota <7) y cuántos desaprobaron.

Запишите в массив оценки группы из N студентов, которые будут вводиться пользователем по одной, пока не будет введено -1 или пока не будет введено максимум 15 оценок. Определите, сколько студентов сдали экзамен (оценка > 4), из них сколько должны сдать письменную работу (оценка >= 7) и сколько будут сдавать экзамен письменно (оценка < 7), а также сколько не сдали.
 */

import java.util.ArrayList;
import java.util.Scanner;

public class la_tarea_2 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        ArrayList<Integer> grades = new ArrayList<>();

        // Ввод оценок пользователемÏ
        System.out.println("Ingrese la calificación estudiantes o \"-1\" para terminar (máximo 15 calificaciones)");

        // Ввод оценок пользователем
        for (int i = 0; i < 15; i++) {
            System.out.print("Ingrese la calificación " + (i + 1) + " : ");
            int grade = scanner.nextInt();
            if (grade == -1) {
                break;
            }
            grades.add(grade);
        }

        // Инициализация счетчиков
        int passed = 0;
        int tpCount = 0;
        int examCount = 0;
        int failed = 0;

        // Подсчет количества студентов, сдавших экзамен, написавших работу и т.д.
        for (int grade : grades) {
            if (grade > 4) {
                passed++;
                if (grade >= 7) {
                    tpCount++;
                } else {
                    examCount++;
                }
            } else {
                failed++;
            }
        }

        // Вывод результатов
        System.out.println("Total de calificaciones: " + grades.size());
        System.out.println("Aprobaron el examen: " + passed);
        System.out.println("Deben escribir un trabajo: " + tpCount);
        System.out.println("Rinden examen escrito: " + examCount);
        System.out.println("No aprobaron: " + failed);

        scanner.close();
    }
}
