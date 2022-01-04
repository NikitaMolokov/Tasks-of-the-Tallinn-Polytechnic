package com.example.xvs0;
import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Color;
import android.os.Bundle;
import android.os.ParcelUuid;
import android.view.View;
import android.widget.Button;
import java.util.ArrayList;

public class MainActivity extends AppCompatActivity

{

    ArrayList<String> Xand0 = new ArrayList<String>();
    public static final int[] bts = {R.id.button1,R.id.button2,R.id.button3,R.id.button4,R.id.button5,R.id.button6,R.id.button7,R.id.button8,R.id.button9};
    int steps = 0;
    boolean gameType = false;
    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        gameReset();
    }

    private void gameReset()
    {

        for (int i = 0; i < 9; i++)
        {
            Button button = (Button)findViewById(bts[i]);
            button.setText("");
            button.setBackgroundColor(Color.parseColor("#4E4E4E"));
            button.setTextSize(50);
            button.setTextColor(Color.parseColor("#FFFFFF"));
            button.setEnabled(true);
        }
        steps = 0;
        Xand0.clear();
        ((Button)findViewById(R.id.whoWinner)).setVisibility(View.INVISIBLE);
        ((Button)findViewById(R.id.whoWinner)).setBackgroundColor(Color.parseColor("#000000"));  //прозрачность
        ((Button)findViewById(R.id.whoWinner)).setTextColor(Color.parseColor("#FFFFFF"));
        ((Button)findViewById(R.id.whoWinner)).setTextSize(64);
    }


    public void gameReset(View view){
        gameReset();
    }




    public void playerClick(Button bt)
    {
        if(bt.getText()=="")
        {
            switch (Xand0.get(Xand0.size() - 1))
            {
                case "X":
                    bt.setText("0");
                    bt.setBackgroundColor(Color.parseColor("#0000FF"));
                    bt.setEnabled(false);
                    Xand0.add("0");
                    break;
                case "0":
                    bt.setText("X");
                    bt.setBackgroundColor(Color.parseColor("#FF0000"));
                    bt.setEnabled(false);
                    Xand0.add("X");
                    break;
            }
            steps++;
            winCheck();
        }
    }
    public void pvp(View view)
    {
        gameType =  false;
        gameReset();
    }
    public void pve(View view)
    {
        gameType =  true;
        gameReset();
    }

    public void showWho(String who)
    {
        ((Button)findViewById(R.id.whoWinner)).setVisibility(View.VISIBLE);
        ((Button)findViewById(R.id.whoWinner)).setText(who + " победил");
    }

    public void winCheck()
    {
        if(((Button)findViewById(bts[0])).getText() == ((Button)findViewById(bts[1])).getText() && ((Button)findViewById(bts[2])).getText() == ((Button)findViewById(bts[1])).getText() && ((Button)findViewById(bts[0])).getText() != "")
        {
            showWho(((Button)findViewById(bts[0])).getText().toString());
            btnAllDisable();
        }
        else if(((Button)findViewById(bts[3])).getText() == ((Button)findViewById(bts[4])).getText() && ((Button)findViewById(bts[4])).getText() == ((Button)findViewById(bts[5])).getText() && ((Button)findViewById(bts[3])).getText() != "")
        {
            showWho(((Button)findViewById(bts[3])).getText().toString());
            btnAllDisable();
        }
        else if(((Button)findViewById(bts[6])).getText() == ((Button)findViewById(bts[7])).getText() && ((Button)findViewById(bts[7])).getText() == ((Button)findViewById(bts[8])).getText() && ((Button)findViewById(bts[6])).getText() != "")
        {
            showWho(((Button)findViewById(bts[6])).getText().toString());
            btnAllDisable();
        }
        else if(((Button)findViewById(bts[0])).getText() == ((Button)findViewById(bts[3])).getText() && ((Button)findViewById(bts[3])).getText() == ((Button)findViewById(bts[6])).getText() && ((Button)findViewById(bts[0])).getText() != "")
        {
            showWho(((Button)findViewById(bts[0])).getText().toString());
            btnAllDisable();
        }
        else if(((Button)findViewById(bts[1])).getText() == ((Button)findViewById(bts[4])).getText() && ((Button)findViewById(bts[4])).getText() == ((Button)findViewById(bts[7])).getText() && ((Button)findViewById(bts[1])).getText() != "")
        {
            showWho(((Button)findViewById(bts[1])).getText().toString());
            btnAllDisable();
        }
        else if(((Button)findViewById(bts[2])).getText() == ((Button)findViewById(bts[5])).getText() && ((Button)findViewById(bts[5])).getText() == ((Button)findViewById(bts[8])).getText() && ((Button)findViewById(bts[2])).getText() != "")
        {
            showWho(((Button)findViewById(bts[2])).getText().toString());
            btnAllDisable();
        }
        else if(((Button)findViewById(bts[0])).getText() == ((Button)findViewById(bts[4])).getText() && ((Button)findViewById(bts[4])).getText() == ((Button)findViewById(bts[8])).getText() && ((Button)findViewById(bts[0])).getText() != "")
        {
            showWho(((Button)findViewById(bts[0])).getText().toString());
            btnAllDisable();
        }
        else if(((Button)findViewById(bts[2])).getText() == ((Button)findViewById(bts[4])).getText() && ((Button)findViewById(bts[4])).getText() == ((Button)findViewById(bts[6])).getText() && ((Button)findViewById(bts[2])).getText() != "")
        {
            showWho(((Button)findViewById(bts[2])).getText().toString());
            btnAllDisable();
        }
        else if(steps == 9) showWho("Никто не");

    }
    public void btnAllDisable()
    {
        for (int i = 0; i < 9; i++)
        {
            Button button = (Button)findViewById(bts[i]);
            button.setEnabled(false);
        }
    }

    public void btnClick(View view)
    {
        if (!gameType)
        {
            Xand0.add(0,"0");

            for (int i = 0; i < 9; i++)
            {
                if(view.getId() == bts[i])
                {
                    playerClick((Button)findViewById(bts[i]));
                }
            }
            winCheck();
        }
        else
        {
            Xand0.add(0,"0");

            for (int i = 0; i < 9; i++)
            {
                if(view.getId() == bts[i])
                {
                    playerClick((Button)findViewById(bts[i]));
                }
            }
            if(steps<9)
            {
                int random_number;
                while(true)
                {
                    random_number = 0 + (int) (Math.random() * 8);

                    if(((Button)findViewById(bts[random_number])).getText() == "")
                    {
                        playerClick((Button)findViewById(bts[random_number]));
                        return;
                    }

                }
            }
        }

    }

}