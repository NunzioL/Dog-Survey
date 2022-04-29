package com.company;
import java.io.*;
import java.net.URLEncoder;
import java.util.ArrayList;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.concurrent.Executor;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;

public class Send_Answers implements Executor{
    ExecutorService thread;
    String ip = "192.168.1.188";
    String variable;
    int minfirst, minsec, minthird;
    Send_Answers(int minfirst, int minsec, int minthird){
        this.minfirst = minfirst;
        this.minsec = minsec;
        this.minthird = minthird;
    }
    public void startThread(){
        thread = Executors.newSingleThreadExecutor();
        String databaseurl = "http://" + ip + "/";
        Runnable run = new Runnable(){
            @Override
            public void run(){
                URL project;
                try {
                    project = new URL(databaseurl + "db/answers.php");
                    HttpURLConnection data = (HttpURLConnection) project.openConnection();
                    data.setRequestMethod("POST");
                    data.setDoOutput(true);
                    data.setDoInput(true);

                    OutputStream output = data.getOutputStream();
                    BufferedWriter writer = new BufferedWriter(new OutputStreamWriter(output,"UTF-8"));
                    String post_data = URLEncoder.encode("First","UTF-8") + "=" + URLEncoder.encode(String.valueOf(minfirst), "UTF-8") + "&" +
                            URLEncoder.encode("Second","UTF-8") + "=" + URLEncoder.encode(String.valueOf(minsec), "UTF-8") + "&" +
                            URLEncoder.encode("Third","UTF-8") + "=" + URLEncoder.encode(String.valueOf(minthird), "UTF-8");
                    System.out.println(post_data);
                    writer.write(post_data);
                    writer.flush();
                    writer.close();
                    output.close();
                    InputStream inputStream = data.getInputStream();
                    BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(inputStream,"iso-8859-1"));
                    String line = "";
                    while ((line = bufferedReader.readLine()) != null){
                        variable += line;
                    }

                    bufferedReader.close();
                    inputStream.close();
                    System.out.println(variable);
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

}
