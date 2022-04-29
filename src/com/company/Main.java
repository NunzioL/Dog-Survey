package com.company;
import java.lang.Math;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class Main {

    public static int calc_dog (String [] dogs, String [] answers) {
        int dog_q1 = Math.abs(Integer.parseInt(dogs[2]) - Integer.parseInt(answers[0]));
        int dog_q2 = Math.abs(Integer.parseInt(dogs[3]) - Integer.parseInt(answers[1]));
        int dog_q3 = Math.abs(Integer.parseInt(dogs[4]) - Integer.parseInt(answers[2]));
        int dog_q4 = Math.abs(Integer.parseInt(dogs[5]) - Integer.parseInt(answers[3]));
        int dog_q5 = Math.abs(Integer.parseInt(dogs[6]) - Integer.parseInt(answers[4]));
        int dog_q6 = Math.abs(Integer.parseInt(dogs[7]) - Integer.parseInt(answers[5]));
        return dog_q1 + dog_q2 + dog_q3
                + dog_q4 + dog_q5 + dog_q6;
    }

    static void Print3Smallest(int[] scores, int n)
    {
        int firstmin = Integer.MAX_VALUE;
        int secmin = Integer.MAX_VALUE;
        int thirdmin = Integer.MAX_VALUE;
        int minfirst = 0;
        int minsec = 0;
        int minthird = 0;
        for (int i = 0; i < n; i++) {
            if (scores[i] < firstmin) {
                thirdmin = secmin;
                secmin = firstmin;
                firstmin = scores[i];
                minfirst = i;
            }
            else if (scores[i] < secmin) {
                thirdmin = secmin;
                secmin = scores[i];
                minsec = i;
            }
            else if (scores[i] < thirdmin) {
                thirdmin = scores[i];
                minthird = i;
            }
        }
        System.out.println("First min = " + minfirst );
        System.out.println("Second min = " + minsec );
        System.out.println("Third min = " + minthird );
        Send_Answers send = new Send_Answers(minfirst, minsec, minthird);
        send.startThread();
    }

    public static void main (String[]args){
        HTML_Connector html = new HTML_Connector();
        html.startThread();
        while(!html.thread.isTerminated()){
        }
        String [] answers = html.returnData();
        for (int i = 0; i < answers.length; i++) {
            System.out.print(answers[i] + " ");
        }
        System.out.println("");


        SQL_Connector connection = new SQL_Connector();
        connection.startThread();
        while(!connection.thread.isTerminated()){
        }
        ArrayList<String[]> dogs = connection.returnData();
        int[] scores;
        scores = new int[20];
        for (int i = 0; i < scores.length; i++) {
            scores[i] = calc_dog(dogs.get(i), answers);
            System.out.print(scores[i] + " ");
        }
        System.out.println("");
        int n = scores.length;
        Print3Smallest(scores, n);
    }
}
