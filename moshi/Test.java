public class Test {
    public static void main(String args[]) {
        //System.out.println("hello");
        /*Single s1 = Single.getIns();
        Single s2 = Single.getIns();
        System.out.println(s1 == s2);
        System.out.println(1==2);*/
    }
}


class Single {
    protected static Single ins = Single.getIns();

    public static Single getIns() {
        if(ins == null) {
            ins  = new Single();
        }

        return ins;
    }
}


// 懒汉模式,饿汉模式

