export default function Input({ value, setValue, placeholder }) {
  return (
    <>
      <input
        value={value}
        onChange={(e) => setValue(e.target.value)}
        placeholder={placeholder}
      />
    </>
  );
}
