package com.company;
import java.lang.Math;

public class Main {
    static int question_1 = 1;
    static int question_2 = 2;
    static int question_3 = 1;
    static int question_4 = 2;
    static int question_5 = 1;
    static int question_6 = 1;

    static int germanShepard_activity = 5;
    static int germanShepard_shedding = 5;
    static int germanShepard_size = 4;
    static int germanShepard_intelligence = 3;
    static int germanShepard_playfulness = 2;
    static int germanShepard_children = 5;

    public static int calc_germanShepard () {
        int germanShepard_q1 = Math.abs(germanShepard_activity - question_1);
        int germanShepard_q2 = Math.abs(germanShepard_shedding - question_2);
        int germanShepard_q3 = Math.abs(germanShepard_size - question_3);
        int germanShepard_q4 = Math.abs(germanShepard_intelligence - question_4);
        int germanShepard_q5 = Math.abs(germanShepard_playfulness - question_5);
        int germanShepard_q6 = Math.abs(germanShepard_children - question_6);
        return germanShepard_q1 + germanShepard_q2 + germanShepard_q3
                + germanShepard_q4 + germanShepard_q5 + germanShepard_q6;
    }

    public static void main (String[]args){
        System.out.println(calc_germanShepard());
    }
}
