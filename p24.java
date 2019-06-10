import java.awt.event.*;
import java.awt.*;
public class calculator extends Frame implements ActionListener
{
	TextField t1;
	Button b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11,b12,b13,b14,b15,b16,b17;
	Double a,b,c;
	int temp;
	public calculator()
	{
		t1=new TextField();
		b1=new Button("1");
		b2=new Button("2");
                       b3=new Button("3");
		b4=new Button("4");
		b5=new Button("5");
		b6=new Button("6");
		b7=new Button("7");
		b8=new Button("8");
		b9=new Button("9");
		b10=new Button("0");
		b11=new Button("+");
		b12=new Button("-");
		b13=new Button("*");
		b14=new Button("/");
		b15=new Button(".");
		b16=new Button("=");
		b17=new Button("ac");
		setTitle("calculator");
		t1.setBounds(150,150,60,20);
		b1.setBounds(150,180,15,15);
		b2.setBounds(170,180,15,15);
		b3.setBounds(190,180,15,15);
		b4.setBounds(150,200,15,15);
		b5.setBounds(170,200,15,15);
		b6.setBounds(190,200,15,15);
		b7.setBounds(150,220,15,15);
		b8.setBounds(170,220,15,15);
		b9.setBounds(190,220,15,15);
		b10.setBounds(150,240,15,15);
		b11.setBounds(170,240,15,15);
		b12.setBounds(190,240,15,15);
		b13.setBounds(150,260,15,15);
		b14.setBounds(170,260,15,15);
		b15.setBounds(190,260,15,15);
		b16.setBounds(150,280,30,20);
		b17.setBounds(190,280,30,20);

		add(t1);
		add(b1);
		add(b2);
		add(b3);
		add(b4);
		add(b5);
		add(b6);
		add(b7);
		add(b8);
		add(b9);
		add(b10);
		add(b11);
		add(b12);
		add(b13);
		add(b14);
		add(b15);
		add(b16);
		add(b17);
		setSize(400,400);
		setLayout(null);
		setVisible(true);
		b1.addActionListener(this);b2.addActionListener(this);b3.addActionListener(this);b4.addActionListener(this);
		b5.addActionListener(this);b6.addActionListener(this);b7.addActionListener(this);b8.addActionListener(this);
		b9.addActionListener(this);b10.addActionListener(this);b11.addActionListener(this);b12.addActionListener(this);
		b13.addActionListener(this);b14.addActionListener(this);b15.addActionListener(this);b16.addActionListener(this);
        b17.addActionListener(this);
	}
    public void actionPerformed(ActionEvent ae)
	{  
      if(ae.getSource()==b1)
	  {
		t1.setText(t1.getText().concat("1"));
      }
	  if(ae.getSource()==b2)
	  {
        t1.setText(t1.getText().concat("2"));
	  }
      if(ae.getSource()==b3)
	  {
        t1.setText(t1.getText().concat("3"));
	  } 
	  if(ae.getSource()==b4)
	  {
        t1.setText(t1.getText().concat("4"));
	  }
	  if(ae.getSource()==b5)
	  {
        t1.setText(t1.getText().concat("5"));
	  }
	  if(ae.getSource()==b6)
	  {
        t1.setText(t1.getText().concat("6"));
	  }
	  if(ae.getSource()==b7)
	  {
        t1.setText(t1.getText().concat("7"));
	  }
	  if(ae.getSource()==b8)
	  {
        t1.setText(t1.getText().concat("8"));
	  }
	  if(ae.getSource()==b9)
	  {
        t1.setText(t1.getText().concat("9"));
	  }
	  if(ae.getSource()==b10)
	  {
        t1.setText(t1.getText().concat("0"));
	  }
	  if(ae.getSource()==b11)
	  {
                      a=Double.parseDouble(t1.getText());
		temp=1;
		t1.setText("");
	  }
	  if(ae.getSource()==b12)
	  {
        a=Double.parseDouble(t1.getText());
		temp=2;
		t1.setText("");      
	  }
	  if(ae.getSource()==b13)
	  {
		a=Double.parseDouble(t1.getText());
		temp=3;
		t1.setText("");
	  }
	  if(ae.getSource()==b14)
	  {
		a=Double.parseDouble(t1.getText());
		temp=4;
		t1.setText("");
	  }
	  if(ae.getSource()==b15)
	  {
        t1.setText(t1.getText().concat("."));
	  }
	   if(ae.getSource()==b16)
	  {
		b=Double.parseDouble(t1.getText());
		if(temp==1)
			c=a+b;
		else if(temp==2)
			c=a-b;
		else if(temp==3)
			c=a*b;
		else if(temp==4)
			c=a/b;
		 else c=0.0;
		 t1.setText(""+c);
	  }
	  if(ae.getSource()==b17)
	  {
        t1.setText("");
	  }
	}
  public static void main(String []args)
  {
	   new calculator();
  }
}
