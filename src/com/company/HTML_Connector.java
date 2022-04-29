package com.company;
import java.io.BufferedReader;
import java.util.ArrayList;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.concurrent.Executor;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;

public class HTML_Connector implements Executor{
    ExecutorService thread;
    String ip = "192.168.1.188";
    String variable;
    public void startThread(){
        thread = Executors.newSingleThreadExecutor();
        String databaseurl = "http://" + ip + "/";
        Runnable run = new Runnable(){
            @Override
            public void run(){
                URL quiz;
                try {
                    quiz = new URL(databaseurl + "db/whatever.php");
                    HttpURLConnection data = (HttpURLConnection) quiz.openConnection();
                    data.setRequestMethod("POST");
                    data.setDoOutput(true);
                    data.setDoInput(true);

                    InputStream inputStream = data.getInputStream();
                    BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(inputStream,"iso-8859-1"));
                    String line = "";
                    while ((line = bufferedReader.readLine()) != null){
                        variable += line;
                    }

                    bufferedReader.close();
                    inputStream.close();
                    data.disconnect();
                } catch (IOException e) {
                    e.printStackTrace();
                }
                thread.shutdown();
            }
        };
        execute(run);
    }
    public void execute(Runnable command) {
        thread.execute(command);
    }
    public String [] returnData() {
        String[] split = variable.split("\\*");
        String[] fin = split[1].split("\\+");
        return fin;
    }
}
