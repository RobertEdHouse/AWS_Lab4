using AWS_Lab4;
using System;
using Xunit;

namespace Test_Lab4
{
    public class UnitTest1
    {
        [Fact]
        public void TestAdd()
        {
            Functions function = new Functions();
            Assert.True(function.Add(2, 3) == 5);
        }
        [Fact]
        public void TestSubtract()
        {
            Functions function = new Functions();
            Assert.True(function.Subtract(2, 3) == -1);
        }
        [Fact]
        public void TestMultiply()
        {
            Functions function = new Functions();
            Assert.True(function.Multiply(2, 3) == 6);
        }
        [Fact]
        public void TestDivide()
        {
            Functions function = new Functions();
            Assert.True(function.Divide(10, 5) == 2);
        }
    }
}
