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

public class SQL_Connector implements Executor{
    ExecutorService thread;
    String ip = "192.168.1.188";
    String variable;
    public void startThread(){
        thread = Executors.newSingleThreadExecutor();
        String databaseurl = "http://" + ip + "/";
        Runnable run = new Runnable(){
            @Override
            public void run(){
                URL project;
                try {
                    project = new URL(databaseurl + "project.php");
                    HttpURLConnection data = (HttpURLConnection) project.openConnection();
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

    @Override
    public void execute(Runnable command) {
        thread.execute(command);
    }
    public ArrayList<String []> returnData(){
        String [] split = variable.split("\\*");
        ArrayList<String []> fin = new ArrayList<String []>();
        for (int i = 1; i < split.length; i++){
            String [] split_2 = split[i].split("\\+");
            fin.add(split_2);
        }
        return fin;
    }
}
