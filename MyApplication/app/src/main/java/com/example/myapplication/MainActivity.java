package com.example.myapplication;

import android.content.Context;
import android.os.Bundle;
import android.view.View;
import android.view.WindowManager;
import android.view.inputmethod.InputMethodManager;
import android.widget.EditText;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

import static com.example.myapplication.morseBook.retMorse;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        TextView textView = findViewById(R.id.textOtvet);
        textView.setText("");
        keyboard();
    }

    public void btnClick(View view)
    {

        EditText vvod = (EditText) findViewById(R.id.vvod);
        TextView textView = findViewById(R.id.textOtvet);
        textView.setText(vvod.getText());
        String str = vvod.getText().toString().toLowerCase();
        String otvet = "";
        for(int i = 0; i < vvod.getText().length(); i++)
        {
            otvet += retMorse(Character.toString(str.charAt(i)));
        }
        textView.setText(otvet);
    }
    public void textClear(View view)
    {
        TextView textView = findViewById(R.id.textOtvet);
        textView.setText("");

        EditText vvod = (EditText) findViewById(R.id.vvod);
        vvod.setText("");

        EditText editText = (EditText) findViewById(R.id.vvod);
        InputMethodManager mgr = (InputMethodManager) getSystemService(Context.INPUT_METHOD_SERVICE);
    // only will trigger it if no physical keyboard is open
        mgr.showSoftInput(editText, InputMethodManager.SHOW_IMPLICIT);
    }
    public void keyboard()
    {
        getWindow().setSoftInputMode(WindowManager.LayoutParams.SOFT_INPUT_STATE_ALWAYS_VISIBLE);
    }

}